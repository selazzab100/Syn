<?php
/**
 * Services overview page.
 *
 * @package Synergia_Connect
 */

get_header();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Services Synergia', 'Synergia Services' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Votre partenaire stratégique et financier', 'Your strategic and financial partner' ); ?></p>
</section>
<section class="service-showcase">
  <div class="container">
    <div class="services-intro">
      <h2><?php echo synergia_connect_translate( 'Des expertises intégrées pour accélérer vos projets', 'Integrated expertise to accelerate your initiatives' ); ?></h2>
      <p><?php echo synergia_connect_translate(
        'Synergia couvre l’ensemble de la chaîne de valeur – de la stratégie à l’exécution – pour transformer vos ambitions en résultats mesurables. Naviguez dans nos lignes de services et accédez à une présentation détaillée de chaque offre.',
        'Synergia covers the entire value chain—from strategy to execution—to turn your ambition into measurable outcomes. Explore our service lines for detailed overviews of each offer.'
      ); ?></p>
    </div>
    <div class="service-mosaic">
      <?php
      $services = [
        [
          'icon'      => '📈',
          'slug'      => 'strategie-excellence-operationnelle',
          'title_fr'  => 'Stratégie & Excellence Opérationnelle',
          'title_en'  => 'Strategy & Operational Excellence',
          'intro_fr'  => 'Clarifier la vision, structurer les plans de création de valeur et fluidifier les opérations.',
          'intro_en'  => 'Clarify the vision, build value creation plans, and streamline operations.',
          'highlights_fr' => [ 'Diagnostic stratégique 360°', 'Roadmap de transformation', 'Lean & automatisation ciblée' ],
          'highlights_en' => [ '360° strategic diagnostic', 'Transformation roadmap', 'Targeted lean & automation' ],
        ],
        [
          'icon'      => '🤝',
          'slug'      => 'transactions-due-diligence',
          'title_fr'  => 'Transactions & Due Diligence',
          'title_en'  => 'Transactions & Due Diligence',
          'intro_fr'  => 'Sécuriser vos opérations de M&A et levées de fonds grâce à une analyse rigoureuse.',
          'intro_en'  => 'Secure M&A and fundraising journeys with rigorous analysis.',
          'highlights_fr' => [ 'Buy-side & vendor due diligence', 'Structuration SPA & QoE', 'Plan post-deal 100 jours' ],
          'highlights_en' => [ 'Buy-side & vendor due diligence', 'SPA structuring & QoE', 'Post-deal 100-day plan' ],
        ],
        [
          'icon'      => '💹',
          'slug'      => 'corporate-finance-modelisation',
          'title_fr'  => 'Corporate Finance & Modélisation',
          'title_en'  => 'Corporate Finance & Modeling',
          'intro_fr'  => 'Modéliser vos scénarios et optimiser la structure financière pour maximiser la valeur.',
          'intro_en'  => 'Model scenarios and optimise financial structure to maximise value.',
          'highlights_fr' => [ 'Modèles financiers 3 états', 'Analyse de structure & multiples', 'Valorisation multi-méthodes' ],
          'highlights_en' => [ 'Three-statement financial models', 'Structure analysis & multiples', 'Multi-method valuation' ],
        ],
        [
          'icon'      => '🧭',
          'slug'      => 'cfo-advisory-transformation-finance',
          'title_fr'  => 'CFO Advisory & Transformation Finance',
          'title_en'  => 'CFO Advisory & Finance Transformation',
          'intro_fr'  => 'Renforcer la fonction finance, ses processus et ses outils de pilotage.',
          'intro_en'  => 'Strengthen the finance function, its processes, and performance tooling.',
          'highlights_fr' => [ 'Target operating model Finance', 'Pilotage & KPI orientés performance', 'Fast close & contrôle interne' ],
          'highlights_en' => [ 'Finance target operating model', 'Performance-oriented KPIs', 'Fast close & internal control' ],
        ],
        [
          'icon'      => '💼',
          'slug'      => 'financement-levee-de-fonds',
          'title_fr'  => 'Financement & Levée de Fonds',
          'title_en'  => 'Fundraising & Financing',
          'intro_fr'  => 'Structurer vos dossiers equity et dette pour accélérer l’accès aux capitaux.',
          'intro_en'  => 'Structure equity and debt packages to accelerate capital access.',
          'highlights_fr' => [ 'Equity story & teaser', 'Structuration dette & covenants', 'Readiness avant roadshow' ],
          'highlights_en' => [ 'Equity story & teaser', 'Debt structuring & covenants', 'Pre-roadshow readiness' ],
        ],
        [
          'icon'      => '🏛️',
          'slug'      => 'subventions-financements-publics',
          'title_fr'  => 'Subventions & Financements publics',
          'title_en'  => 'Grants & Public Funding',
          'intro_fr'  => 'Identifier les programmes et sécuriser les financements publics adaptés à vos projets.',
          'intro_en'  => 'Identify programmes and secure public funding tailored to your projects.',
          'highlights_fr' => [ 'Cartographie des aides', 'Montage technique & financier', 'Reporting et conformité' ],
          'highlights_en' => [ 'Funding opportunity mapping', 'Technical & financial structuring', 'Reporting and compliance' ],
        ],
        [
          'icon'      => '🎓',
          'slug'      => 'academie-formation',
          'title_fr'  => 'Académie & Formation',
          'title_en'  => 'Academy & Training',
          'intro_fr'  => 'Développer les compétences clés de vos équipes à travers des formats immersifs.',
          'intro_en'  => 'Develop critical capabilities through immersive learning formats.',
          'highlights_fr' => [ 'Programmes dirigeants & managers', 'Tracks finance & deal', 'Parcours certifiants & coaching' ],
          'highlights_en' => [ 'Executive & management programmes', 'Finance & deal tracks', 'Certification paths & coaching' ],
        ],
      ];
      foreach ( $services as $service ) {
        $title = synergia_connect_translate( $service['title_fr'], $service['title_en'] );
        $intro = synergia_connect_translate( $service['intro_fr'], $service['intro_en'] );
        $list  = synergia_connect_translate( $service['highlights_fr'], $service['highlights_en'] );
        ?>
        <article class="service-panel">
          <div class="panel-top">
            <span class="panel-icon" aria-hidden="true"><?php echo esc_html( $service['icon'] ); ?></span>
            <h3><?php echo esc_html( $title ); ?></h3>
            <p><?php echo esc_html( $intro ); ?></p>
          </div>
          <ul class="panel-list">
            <?php foreach ( (array) $list as $item ) : ?>
              <li><?php echo esc_html( $item ); ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn-outline" href="<?php echo esc_url( synergia_connect_link( $service['slug'] ) ); ?>"><?php echo synergia_connect_translate( 'Découvrir la ligne', 'View service line' ); ?></a>
        </article>
        <?php
      }
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
