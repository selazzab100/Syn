<?php
/**
 * Corporate Finance & Modeling page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Corporate Finance &amp; Modélisation', 'Corporate Finance &amp; Modeling' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Modèles robustes, décisions éclairées', 'Robust models, confident decisions' ); ?></p>
</section>
<section class="content-section single-column">
  <div class="container">
    <?php if ( $is_fr ) : ?>
      <h2>Structurer votre performance financière</h2>
      <p>Nous associons expertise en modélisation et conseil financier pour sécuriser vos décisions d’investissement et maximiser la valeur créée.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Modélisation financière / Business Plan</h3>
          <ul>
            <li>Modèles financiers 3-états conformes FAST/ICo avec scénarios.</li>
            <li>Business plans d’investissement et de développement.</li>
            <li>Revues indépendantes côté investisseur.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Conseil financier</h3>
          <ul>
            <li>Revue de la structure financière et des alternatives.</li>
            <li>Analyse des relais de création de valeur (marge, CAPEX, BFR).</li>
            <li>Pré-évaluation via analyses de multiples.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Valorisation &amp; analyses spécifiques</h3>
          <ul>
            <li>DCF, comparables, transactions précédentes.</li>
            <li>Analyses de sensibilité, break-even et covenant headroom.</li>
            <li>Études ciblées selon vos enjeux sectoriels.</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contactez-nous</a>
      </div>
    <?php else : ?>
      <h2>Strengthening financial decision-making</h2>
      <p>We blend modeling expertise with financial advisory to secure investment decisions and maximise value creation.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Financial Modeling / Business Planning</h3>
          <ul>
            <li>FAST/ICo compliant three-statement financial models with scenarios.</li>
            <li>Investment and growth business plans.</li>
            <li>Independent reviews from an investor perspective.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Financial Advisory</h3>
          <ul>
            <li>Financial structure assessment and alternatives.</li>
            <li>Value creation analysis across margin, CAPEX, and working capital.</li>
            <li>Preliminary valuation through multiples screening.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Valuation &amp; bespoke analysis</h3>
          <ul>
            <li>DCF, comparables, and precedent transaction benchmarking.</li>
            <li>Sensitivity, break-even, and covenant headroom analyses.</li>
            <li>Focused studies tailored to sector-specific issues.</li>
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
