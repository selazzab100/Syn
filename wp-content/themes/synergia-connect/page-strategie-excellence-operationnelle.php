<?php
/**
 * Strategy & Operational Excellence page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Stratégie &amp; Excellence Opérationnelle', 'Strategy &amp; Operational Excellence' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Vision, valeur et performance opérationnelle', 'Vision, value, and operational performance' ); ?></p>
</section>
<section class="content-section single-column">
  <div class="container">
    <?php if ( $is_fr ) : ?>
      <h2>Accompagner votre trajectoire</h2>
      <p>Synergia définit avec vous une stratégie claire tout en optimisant vos processus clés afin de soutenir la croissance, la rentabilité et l’efficacité opérationnelle.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Diagnostic stratégique &amp; positionnement</h3>
          <ul>
            <li>Diagnostic financier et stratégique complet (revue 360°).</li>
            <li>Analyse portefeuille &amp; matrice croissance/part de marché.</li>
            <li>Évaluation des avantages compétitifs et du pricing.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Trajectoire &amp; plans de création de valeur</h3>
          <ul>
            <li>Plan stratégique 3–5 ans et roadmap détaillée.</li>
            <li>Value Creation Plan (VCP) pré/post-deal.</li>
            <li>Programmes d’amélioration de marge (cost-out, mix, pricing).</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Optimisation des opérations &amp; processus</h3>
          <ul>
            <li>Optimisation des processus (P2P, O2C, R2R, etc.).</li>
            <li>Démarches Lean/Kaizen pour réduire les temps de cycle et améliorer la qualité.</li>
            <li>Cadrage des opportunités d’automatisation (RPA, low-code).</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contactez-nous</a>
      </div>
    <?php else : ?>
      <h2>Guiding your strategic journey</h2>
      <p>Synergia works alongside your leadership team to define a clear strategy while optimising critical processes to drive growth, profitability, and operational excellence.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Strategic Diagnostic &amp; Positioning</h3>
          <ul>
            <li>Comprehensive 360° financial and strategic review.</li>
            <li>Portfolio assessment &amp; growth/share matrix.</li>
            <li>Competitive advantage and pricing evaluation.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Trajectory &amp; Value Creation Plans</h3>
          <ul>
            <li>3–5 year strategic plan and actionable roadmap.</li>
            <li>Pre-/post-deal Value Creation Plan (VCP).</li>
            <li>Margin improvement programmes (cost-out, mix, pricing).</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Process &amp; Operations Optimisation</h3>
          <ul>
            <li>Process optimisation (P2P, O2C, R2R, etc.).</li>
            <li>Lean/Kaizen initiatives reducing cycle times and boosting service quality.</li>
            <li>Automation opportunity scoping (RPA, low-code).</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contact us</a>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
