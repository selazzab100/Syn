Attribute VB_Name = "OrganigramGenerator"
Option Explicit

' Generates a hierarchical organigram from a three-column holdings table.
' Expected table columns: Held Entity | Holding Entity | Control %
' Place the table in a worksheet table (ListObject) named "Holdings" (or the first table in the sheet)
' and run GenerateOrganigram. Shapes will be drawn on a sheet named "Organigram" (created if missing).

Private Type OrgEdge
    Child As String
    Percent As Double
End Type

Public Sub GenerateOrganigram()
    Dim inputSheet As Worksheet
    Dim orgSheet As Worksheet
    Dim holdings As ListObject
    Dim data As Variant
    Dim parentChildren As Object ' Dictionary (String -> Collection of OrgEdge)
    Dim childSeen As Object
    Dim parentSeen As Object
    Dim roots As Collection
    Dim heldCol As Long, holdingCol As Long, pctCol As Long
    Dim i As Long

    On Error Resume Next
    Set inputSheet = ThisWorkbook.Worksheets("Input")
    On Error GoTo 0

    If inputSheet Is Nothing Then
        Set inputSheet = ThisWorkbook.Worksheets(1)
    End If

    Set holdings = Nothing
    If inputSheet.ListObjects.Count > 0 Then
        On Error Resume Next
        Set holdings = inputSheet.ListObjects("Holdings")
        On Error GoTo 0
        If holdings Is Nothing Then
            Set holdings = inputSheet.ListObjects(1)
        End If
    End If

    If holdings Is Nothing Then
        MsgBox "Please create a table named 'Holdings' with columns Held Entity, Holding Entity, Control %.", vbExclamation
        Exit Sub
    End If

    data = holdings.DataBodyRange.Value
    heldCol = GetColumnIndex(holdings, "Held Entity")
    holdingCol = GetColumnIndex(holdings, "Holding Entity")
    pctCol = GetColumnIndex(holdings, "Control %")

    If heldCol = 0 Or holdingCol = 0 Or pctCol = 0 Then
        MsgBox "Holdings table must contain columns: Held Entity, Holding Entity, Control %.", vbExclamation
        Exit Sub
    End If

    Set parentChildren = CreateObject("Scripting.Dictionary")
    Set childSeen = CreateObject("Scripting.Dictionary")
    Set parentSeen = CreateObject("Scripting.Dictionary")

    For i = 1 To UBound(data, 1)
        Dim held As String
        Dim holder As String
        Dim pct As Double
        held = Trim(CStr(data(i, heldCol)))
        holder = Trim(CStr(data(i, holdingCol)))
        pct = ParsePercent(data(i, pctCol))

        If Len(held) > 0 And Len(holder) > 0 Then
            Dim edges As Collection
            If parentChildren.Exists(holder) Then
                Set edges = parentChildren(holder)
            Else
                Set edges = New Collection
                parentChildren.Add holder, edges
            End If
            Dim e As OrgEdge
            e.Child = held
            e.Percent = pct
            edges.Add e
            If Not childSeen.Exists(held) Then childSeen.Add held, True
            If Not parentSeen.Exists(holder) Then parentSeen.Add holder, True
        End If
    Next i

    Set roots = New Collection
    Dim parentKey As Variant
    For Each parentKey In parentSeen.Keys
        If Not childSeen.Exists(parentKey) Then
            roots.Add CStr(parentKey)
        End If
    Next parentKey

    If roots.Count = 0 Then
        MsgBox "Unable to find a root holding entity (an entity that never appears as Held Entity).", vbExclamation
        Exit Sub
    End If

    Set orgSheet = GetOrganigramSheet
    ClearOrganigramShapes orgSheet

    Dim levels As Collection
    Set levels = BuildLevels(parentChildren, roots, 5)

    If levels.Count = 0 Then
        MsgBox "No hierarchy could be built from the provided data.", vbExclamation
        Exit Sub
    End If

    DrawOrganigram orgSheet, levels, parentChildren
    MsgBox "Organigram generated on sheet '" & orgSheet.Name & "'", vbInformation
End Sub

Private Function GetColumnIndex(tbl As ListObject, headerName As String) As Long
    Dim i As Long
    headerName = LCase$(Trim(headerName))
    For i = 1 To tbl.ListColumns.Count
        If LCase$(Trim(tbl.ListColumns(i).Name)) = headerName Then
            GetColumnIndex = i
            Exit Function
        End If
    Next i
    GetColumnIndex = 0
End Function

Private Function ParsePercent(value As Variant) As Double
    If IsNumeric(value) Then
        ParsePercent = CDbl(value)
    Else
        Dim txt As String
        txt = CStr(value)
        txt = Replace(txt, "%", "")
        txt = Replace(txt, ",", ".")
        If IsNumeric(txt) Then
            ParsePercent = CDbl(txt)
        Else
            ParsePercent = 0
        End If
    End If
End Function

Private Function GetOrganigramSheet() As Worksheet
    Dim ws As Worksheet
    On Error Resume Next
    Set ws = ThisWorkbook.Worksheets("Organigram")
    On Error GoTo 0
    If ws Is Nothing Then
        Set ws = ThisWorkbook.Worksheets.Add
        ws.Name = "Organigram"
    End If
    ws.Cells.Clear
    Set GetOrganigramSheet = ws
End Function

Private Sub ClearOrganigramShapes(ws As Worksheet)
    Dim shp As Shape
    For Each shp In ws.Shapes
        shp.Delete
    Next shp
    ws.Cells.Clear
End Sub

Private Function BuildLevels(parentChildren As Object, roots As Collection, maxDepth As Long) As Collection
    Dim levels As New Collection
    Dim current As New Collection
    Dim visited As Object
    Dim nextLevel As Collection
    Dim depth As Long
    Dim key As Variant

    Set visited = CreateObject("Scripting.Dictionary")
    For Each key In roots
        If Not visited.Exists(key) Then
            current.Add key
            visited.Add key, True
        End If
    Next key

    depth = 1
    Do While current.Count > 0 And depth <= maxDepth
        levels.Add CopyCollection(current)
        Set nextLevel = New Collection
        Dim node As Variant
        For Each node In current
            If parentChildren.Exists(node) Then
                Dim edges As Collection
                Set edges = parentChildren(node)
                Dim i As Long
                For i = 1 To edges.Count
                    Dim childName As String
                    childName = edges(i).Child
                    If Not visited.Exists(childName) Then
                        nextLevel.Add childName
                        visited.Add childName, True
                    End If
                Next i
            End If
        Next node
        Set current = nextLevel
        depth = depth + 1
    Loop

    Set BuildLevels = levels
End Function

Private Function CopyCollection(source As Collection) As Collection
    Dim c As New Collection
    Dim item As Variant
    For Each item In source
        c.Add item
    Next item
    Set CopyCollection = c
End Function

Private Sub DrawOrganigram(ws As Worksheet, levels As Collection, parentChildren As Object)
    Const nodeWidth As Double = 160
    Const nodeHeight As Double = 50
    Const hGap As Double = 40
    Const vGap As Double = 80
    Const margin As Double = 20

    Dim shapesByEntity As Object
    Set shapesByEntity = CreateObject("Scripting.Dictionary")

    Dim levelIndex As Long
    For levelIndex = 1 To levels.Count
        Dim levelNodes As Collection
        Set levelNodes = levels(levelIndex)

        Dim count As Long
        count = levelNodes.Count
        If count = 0 Then GoTo ContinueLevel

        Dim startLeft As Double
        startLeft = margin
        Dim topPos As Double
        topPos = margin + (levelIndex - 1) * (nodeHeight + vGap)

        Dim idx As Long
        For idx = 1 To count
            Dim entityName As String
            entityName = levelNodes(idx)
            Dim leftPos As Double
            leftPos = startLeft + (idx - 1) * (nodeWidth + hGap)
            Dim shp As Shape
            Set shp = ws.Shapes.AddShape(msoShapeRoundedRectangle, leftPos, topPos, nodeWidth, nodeHeight)
            shp.TextFrame.Characters.Text = entityName
            shp.TextFrame.HorizontalAlignment = xlHAlignCenter
            shp.TextFrame.VerticalAlignment = xlVAlignCenter
            shp.TextFrame.Characters.Font.Size = 10
            shp.TextFrame.Characters.Font.Bold = True
            shp.Fill.ForeColor.RGB = RGB(234, 242, 255)
            shp.Line.ForeColor.RGB = RGB(45, 86, 151)
            shp.Name = "OrgNode_" & SanitizeName(entityName)
            shapesByEntity(entityName) = shp
        Next idx
ContinueLevel:
    Next levelIndex

    ' Draw connectors after all nodes exist
    Dim parentName As Variant
    For Each parentName In parentChildren.Keys
        If shapesByEntity.Exists(parentName) Then
            Dim edges As Collection
            Set edges = parentChildren(parentName)
            Dim j As Long
            For j = 1 To edges.Count
                Dim childName As String
                childName = edges(j).Child
                If shapesByEntity.Exists(childName) Then
                    Dim conn As Shape
                    Set conn = ws.Shapes.AddConnector(msoConnectorElbow, 0, 0, 10, 10)
                    conn.Line.ForeColor.RGB = RGB(90, 90, 90)
                    conn.ConnectorFormat.BeginConnect shapesByEntity(parentName), 2
                    conn.ConnectorFormat.EndConnect shapesByEntity(childName), 1
                    conn.RerouteConnections
                    conn.TextFrame2.TextRange.Text = Format(edges(j).Percent, "0.00") & "%"
                    conn.TextFrame2.TextRange.ParagraphFormat.Alignment = msoAlignCenter
                    conn.TextFrame2.VerticalAnchor = msoAnchorMiddle
                    conn.Name = "OrgConn_" & SanitizeName(parentName) & "_to_" & SanitizeName(childName)
                End If
            Next j
        End If
    Next parentName

    ws.Cells(1, 1).Value = "Organigram generated " & Format(Now, "yyyy-mm-dd hh:nn")
    ws.Cells(1, 1).Font.Bold = True
End Sub

Private Function SanitizeName(text As String) As String
    Dim cleaned As String
    cleaned = text
    cleaned = Replace(cleaned, " ", "_")
    cleaned = Replace(cleaned, ":", "_")
    cleaned = Replace(cleaned, "-", "_")
    cleaned = Replace(cleaned, "/", "_")
    SanitizeName = cleaned
End Function
