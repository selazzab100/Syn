<?php
/**
 * Academy & Training page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
?>
<section class="page-title">
  <h1><?php echo synergia_connect_translate( 'Académie &amp; Formation', 'Academy &amp; Training' ); ?></h1>
  <p><?php echo synergia_connect_translate( 'Développer les compétences de demain', 'Developing tomorrow’s capabilities' ); ?></p>
</section>
<section class="content-section single-column">
  <div class="container">
    <?php if ( $is_fr ) : ?>
      <h2>Capitaliser sur vos talents</h2>
      <p>Synergia conçoit des programmes immersifs pour renforcer les compétences stratégiques et financières de vos dirigeants et managers.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Programmes dirigeants &amp; managers</h3>
          <ul>
            <li>Stratégie, pilotage de la performance, lecture des états financiers.</li>
            <li>Finance pour non-financiers (cash, marge, ROI).</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Tracks spécialisés Finance/Deal</h3>
          <ul>
            <li>Simulations de due diligence (VDD/BDD).</li>
            <li>Modélisation financière avancée (scénarios, sensibilité).</li>
            <li>Clôture accélérée et contrôle interne essentials.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Formats &amp; dispositifs</h3>
          <ul>
            <li>Ateliers intra/inter, parcours certifiants, coaching 1-to-1.</li>
            <li>Business games et études de cas contextualisés Maroc/Afrique.</li>
          </ul>
        </li>
      </ul>
      <div class="cta-wrap">
        <a class="btn-primary" href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>">Contactez-nous</a>
      </div>
    <?php else : ?>
      <h2>Developing future-ready teams</h2>
      <p>Synergia delivers immersive learning programmes that build strategic, financial, and operational skills for executives and managers.</p>
      <ul class="service-list detailed">
        <li class="service-item">
          <h3>Executive &amp; management programmes</h3>
          <ul>
            <li>Strategy, performance steering, and financial statement literacy.</li>
            <li>Finance for non-financial managers (cash, margins, ROI).</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Specialised finance/deal tracks</h3>
          <ul>
            <li>Due diligence simulations (VDD/BDD).</li>
            <li>Advanced financial modelling (scenarios, sensitivity).</li>
            <li>Accelerated close and essential internal controls.</li>
          </ul>
        </li>
        <li class="service-item">
          <h3>Formats &amp; delivery</h3>
          <ul>
            <li>In-company and open workshops, certification paths, one-to-one coaching.</li>
            <li>Contextualised business games and case studies for Morocco/Africa.</li>
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
