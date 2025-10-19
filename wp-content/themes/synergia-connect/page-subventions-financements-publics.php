<?php
/**
 * Grants & Incentives page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Subventions &amp; Financements publics', 'Grants &amp; Incentives' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Maximiser vos aides et financements publics', 'Maximise your public funding' ); ?></p>
</section>
<section class="content-section single-column">
  <div class="container">
    <?php if ( $is_fr ) : ?>
      <h2>Sécuriser vos financements publics</h2>
      <p>Nous identifions les programmes éligibles, construisons les dossiers et assurons le suivi jusqu’au décaissement des subventions.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Cartographie &amp; éligibilité</h3>
          <ul>
            <li>Screening des programmes nationaux, régionaux et sectoriels.</li>
            <li>Diagnostic d’éligibilité et priorisation des dispositifs.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Montage de dossiers &amp; obtention</h3>
          <ul>
            <li>Structuration technique et financière des dossiers.</li>
            <li>Business plan et mesure d’impact (emplois, export, carbone).</li>
            <li>Interaction avec les organismes financeurs.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Conformité &amp; reporting post-octroi</h3>
          <ul>
            <li>Pilotage des jalons et rapports d’avancement.</li>
            <li>Préparation des audits d’utilisation des fonds.</li>
            <li>Optimisation du mix subventions/financements.</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contactez-nous</a>
      </div>
    <?php else : ?>
      <h2>Unlocking public funding opportunities</h2>
      <p>We map relevant programmes, build robust applications, and manage compliance until grants are secured and disbursed.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Mapping &amp; eligibility</h3>
          <ul>
            <li>Screening national, regional, and sector programmes.</li>
            <li>Eligibility diagnostics and prioritisation of funding schemes.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Application development &amp; award</h3>
          <ul>
            <li>Technical and financial structuring of submissions.</li>
            <li>Business plans and impact measurement (jobs, export, carbon).</li>
            <li>Engagement with funding bodies and follow-up.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Compliance &amp; post-award reporting</h3>
          <ul>
            <li>Milestone tracking and progress reporting.</li>
            <li>Preparation for fund utilisation audits.</li>
            <li>Optimisation of grants versus alternative financing.</li>
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
