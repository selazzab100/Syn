<?php
/**
 * Transactions & Due Diligence page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Transactions &amp; Due Diligence', 'Transactions &amp; Due Diligence' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Optimiser chaque phase de vos deals', 'Optimising every phase of your deals' ); ?></p>
</section>
<section class="content-section single-column">
  <div class="container">
    <?php if ( $is_fr ) : ?>
      <h2>Sécuriser vos opérations stratégiques</h2>
      <p>Nous accompagnons les entreprises sur l’ensemble du cycle transactionnel avec une approche rigoureuse et orientée valeur.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Due diligence financière</h3>
          <ul>
            <li>Buy-Side Financial Due Diligence personnalisée.</li>
            <li>Vendor Due Diligence et Vendor Assist.</li>
            <li>Red-Flag Due Diligence ciblant les risques majeurs.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Préparation &amp; exécution de transaction</h3>
          <ul>
            <li>Data-book et Quality of Earnings (QoE).</li>
            <li>Support SPA et mécanismes de prix (NWC, dette nette, earn-out).</li>
            <li>Préparation des carve-outs et des standalone costs.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Plan post-deal</h3>
          <ul>
            <li>100-Day Plan financier et pilotage des initiatives.</li>
            <li>KPI pack post-closing et focus cash.</li>
            <li>Handover structuré vers les équipes internes.</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contactez-nous</a>
      </div>
    <?php else : ?>
      <h2>Securing your strategic deals</h2>
      <p>We support companies throughout the full transaction lifecycle with rigorous, value-oriented advisory.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Financial Due Diligence</h3>
          <ul>
            <li>Tailored Buy-Side Financial Due Diligence.</li>
            <li>Vendor Due Diligence and Vendor Assist engagements.</li>
            <li>Red-Flag reviews focusing on key financial risks.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Transaction readiness &amp; execution</h3>
          <ul>
            <li>Data book preparation and Quality of Earnings analysis.</li>
            <li>SPA assistance and price mechanics (NWC, net debt, earn-out).</li>
            <li>Carve-out preparation and standalone cost assessment.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Post-deal planning</h3>
          <ul>
            <li>Financial 100-Day Plan and initiative tracking.</li>
            <li>Post-closing KPI pack and cash management focus.</li>
            <li>Structured handover to internal teams.</li>
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
