# Organigram Generator VBA Module

This repository ships a VBA module that builds a graphical organigram (entity tree) from a three-column holdings table (Held Entity / Holding Entity / Control %). Add the module to a macro-enabled workbook and run `GenerateOrganigram` to draw rounded-rectangle nodes and elbow connectors annotated with ownership percentages.

## How to use the module
1. Open any macro-enabled workbook (or save as `.xlsm`).
2. Press `ALT + F11` to open the VBA editor.
3. From the Project Explorer, right-click your workbook and choose **Import File...**, then select `OrganigramGenerator.bas` from this repository.
4. On a worksheet (for example, name it **Input**), create an Excel table (`Insert` → `Table`) with the exact column headers:
   - `Held Entity`
   - `Holding Entity`
   - `Control %` (numbers or text such as `46,51%` are accepted)
   Name the table **Holdings**.
5. Run the macro:
   - Return to Excel, press `ALT + F8`, pick `GenerateOrganigram`, and click **Run**.

The macro creates/cleans a sheet named **Organigram**, lays out the hierarchy up to five levels deep, adds rounded rectangles for each entity, and draws elbow connectors labeled with the control percentage. Roots are inferred automatically as entities that never appear in the `Held Entity` column.

## Layout notes
- Nodes are evenly spaced horizontally per level with configurable padding inside the module.
- Connector labels show the formatted percentage (`0.00%`).
- If no root entity can be inferred (every entity is held by someone else), the macro stops with a helpful message.

## Data tips
- Use one row per ownership relationship.
- Percent values accept either dots or commas as decimal separators; the macro strips a trailing `%` if present.
- You can trim the provided sample hierarchy into a smaller dataset for testing if the full tree is too large for a single page.

## Files
- `OrganigramGenerator.bas`: VBA module with the `GenerateOrganigram` macro and supporting helpers.

## Security reminder
The workbook must allow macros for the organigram to generate. Depending on your security policy, you may need to enable macros when opening the file.
