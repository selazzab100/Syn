<?php
/**
 * Front page template.
 *
 * @package Synergia_Connect
 */

get_header();
?>
<section class="hero" style="background-image: linear-gradient(rgba(10, 76, 172, 0.78), rgba(10, 76, 172, 0.78)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-team.jpg' ); ?>');" aria-label="Synergia hero">
  <div class="hero-content">
    <h1>Accélérez votre performance<br><span lang="en">Accelerate Your Performance</span></h1>
    <p>Synergia est un cabinet de conseil en stratégie et finance d’entreprise, votre partenaire de confiance pour transformer vos ambitions en résultats concrets.<br><span lang="en">Synergia is a strategic and financial consulting firm, your trusted partner to transform ambition into tangible results.</span></p>
    <div class="cta-group">
      <a class="btn-primary" href="<?php echo esc_url( home_url( '/index.php/contact/' ) ); ?>">Contactez-nous / Contact us</a>
      <a class="btn-secondary" href="<?php echo esc_url( home_url( '/index.php/services/' ) ); ?>">Découvrir nos services</a>
    </div>
  </div>
</section>
<section class="section" id="presentation">
  <div class="container">
    <h2>Votre partenaire conseil 360°<br><span lang="en">Your 360° Advisory Partner</span></h2>
    <p class="section-intro">Synergia accompagne les entreprises marocaines et internationales dans leurs enjeux stratégiques, financiers et opérationnels avec une approche sur mesure axée sur l’impact.<br><span lang="en">Synergia supports Moroccan and international businesses across strategic, financial, and operational challenges with a tailor-made, impact-focused approach.</span></p>
    <div class="clients-carousel" aria-label="Clients">
      <div class="carousel-track">
        <?php
        $logos = [ 'Alphacorp', 'Global Ventures', 'Atlas Industries', 'Maghreb Finance', 'Sahara Energy', 'Atlantic Services' ];
        foreach ( $logos as $logo ) {
          $svg = sprintf(
            'data:image/svg+xml;charset=UTF-8,%s',
            rawurlencode(
              '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="80"><rect width="200" height="80" fill="%23F0F0F0" rx="12"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="%23666666" font-family="Montserrat" font-size="18">' . esc_html( $logo ) . '</text></svg>'
            )
          );
          echo '<img src="' . esc_url( $svg ) . '" alt="Logo client ' . esc_attr( $logo ) . '">';
        }
        foreach ( $logos as $logo ) {
          $svg = sprintf(
            'data:image/svg+xml;charset=UTF-8,%s',
            rawurlencode(
              '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="80"><rect width="200" height="80" fill="%23F0F0F0" rx="12"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="%23666666" font-family="Montserrat" font-size="18">' . esc_html( $logo ) . '</text></svg>'
            )
          );
          echo '<img src="' . esc_url( $svg ) . '" alt="Logo client ' . esc_attr( $logo ) . '">';
        }
        ?>
      </div>
    </div>
    <div class="metrics-grid" aria-label="Indicateurs clés">
      <div class="metric-card">
        <span class="metric-icon" aria-hidden="true">🤝</span>
        <div class="metric-value" data-count-target="150" data-count-suffix="clients">0</div>
        <div class="metric-label">Clients accompagnés / Clients served</div>
      </div>
      <div class="metric-card">
        <span class="metric-icon" aria-hidden="true">👩‍💼</span>
        <div class="metric-value" data-count-target="40" data-count-suffix="experts">0</div>
        <div class="metric-label">Experts dédiés / Dedicated experts</div>
      </div>
      <div class="metric-card">
        <span class="metric-icon" aria-hidden="true">💼</span>
        <div class="metric-value" data-count-target="20" data-count-suffix="MMAD">0</div>
        <div class="metric-label">Montant levé / Funds raised (MMAD)</div>
      </div>
    </div>
  </div>
</section>
<section class="section alt" id="service-lines">
  <div class="container">
    <h2>Nos lignes de services / Our Service Lines</h2>
    <p class="section-intro">Découvrez une offre intégrée couvrant stratégie, finance, opérations et formation, pensée pour accélérer votre performance.<br><span lang="en">Discover an integrated offering across strategy, finance, operations, and training, designed to accelerate performance.</span></p>
    <div class="services-grid">
      <?php
      $services = [
        [
          'icon'  => '📈',
          'title' => 'Stratégie & Excellence Opérationnelle',
          'desc'  => 'Accompagnement dans la définition de la stratégie et l’optimisation des opérations pour une croissance durable.<br><span lang="en">Support in defining strategy and optimizing operations for sustainable growth.</span>',
          'link'  => '/index.php/strategie-excellence-operationnelle/',
        ],
        [
          'icon'  => '🤝',
          'title' => 'Transactions & Due Diligence',
          'desc'  => 'Conseil lors de vos opérations de fusion-acquisition ou levées de fonds avec due diligence rigoureuse.<br><span lang="en">Advisory for M&A and fundraising with rigorous due diligence.</span>',
          'link'  => '/index.php/transactions-due-diligence/',
        ],
        [
          'icon'  => '💹',
          'title' => 'Corporate Finance & Modélisation',
          'desc'  => 'Modélisation financière et conseil en structure de capital pour maximiser la valeur.<br><span lang="en">Financial modeling and capital structure guidance to maximize value.</span>',
          'link'  => '/index.php/corporate-finance-modelisation/',
        ],
        [
          'icon'  => '🧭',
          'title' => 'CFO Advisory & Transformation Finance',
          'desc'  => 'Transformation de la fonction finance et pilotage de la performance.<br><span lang="en">Transforming the finance function and performance management.</span>',
          'link'  => '/index.php/cfo-advisory-transformation-finance/',
        ],
        [
          'icon'  => '💼',
          'title' => 'Financement & Levée de Fonds',
          'desc'  => 'Stratégies de financement equity & dette pour soutenir votre développement.<br><span lang="en">Equity and debt funding strategies to support growth.</span>',
          'link'  => '/index.php/financement-levee-de-fonds/',
        ],
        [
          'icon'  => '🏛️',
          'title' => 'Subventions & Financements publics',
          'desc'  => 'Identification des aides publiques et accompagnement complet des demandes.<br><span lang="en">Identifying public funding and supporting applications end-to-end.</span>',
          'link'  => '/index.php/subventions-financements-publics/',
        ],
        [
          'icon'  => '🎓',
          'title' => 'Académie & Formation',
          'desc'  => 'Formations sur mesure pour renforcer les compétences stratégiques et financières.<br><span lang="en">Tailored training to strengthen strategic and financial skills.</span>',
          'link'  => '/index.php/academie-formation/',
        ],
      ];
      foreach ( $services as $service ) {
        ?>
        <article class="service-card">
          <span class="service-icon" aria-hidden="true"><?php echo esc_html( $service['icon'] ); ?></span>
          <h3><?php echo esc_html( $service['title'] ); ?></h3>
          <p><?php echo wp_kses_post( $service['desc'] ); ?></p>
          <a class="btn-text" href="<?php echo esc_url( home_url( $service['link'] ) ); ?>">En savoir plus / Learn more</a>
        </article>
        <?php
      }
      ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>
