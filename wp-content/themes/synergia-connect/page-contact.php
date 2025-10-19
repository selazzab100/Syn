<?php
/**
 * Contact page.
 *
 * @package Synergia_Connect
 */

get_header();
$is_fr = synergia_connect_is_french();
$contact_title = synergia_connect_translate( 'Contact Synergia', 'Contact Synergia' );
$contact_intro = synergia_connect_translate( 'Échangeons sur vos projets', 'Let’s discuss your projects' );
?>
<section class="page-title">
  <h1><?php echo esc_html( $contact_title ); ?></h1>
  <p><?php echo esc_html( $contact_intro ); ?></p>
</section>
<section class="content-section">
  <div class="container contact-grid">
    <div class="contact-form">
      <h2><?php echo synergia_connect_translate( 'Formulaire de contact', 'Contact form' ); ?></h2>
      <form action="#" method="post">
        <label for="cf-name"><?php echo synergia_connect_translate( 'Nom complet', 'Full name' ); ?></label>
        <input type="text" id="cf-name" name="cf-name" required>
        <label for="cf-email"><?php echo synergia_connect_translate( 'Email professionnel', 'Business email' ); ?></label>
        <input type="email" id="cf-email" name="cf-email" required>
        <label for="cf-phone"><?php echo synergia_connect_translate( 'Téléphone', 'Phone' ); ?></label>
        <input type="tel" id="cf-phone" name="cf-phone">
        <label for="cf-company"><?php echo synergia_connect_translate( 'Entreprise', 'Company' ); ?></label>
        <input type="text" id="cf-company" name="cf-company">
        <label for="cf-message"><?php echo synergia_connect_translate( 'Message', 'Message' ); ?></label>
        <textarea id="cf-message" name="cf-message" required></textarea>
        <button class="btn-primary" type="submit"><?php echo synergia_connect_translate( 'Envoyer', 'Send' ); ?></button>
      </form>
    </div>
    <div class="contact-info">
      <h3><?php echo synergia_connect_translate( 'Coordonnées', 'Contact details' ); ?></h3>
      <ul>
        <li>📍 <?php echo synergia_connect_translate( '123 Rue de l’Exemple, Quartier des Affaires, Casablanca, Maroc', '123 Example Street, Business District, Casablanca, Morocco' ); ?></li>
        <li>📞 <a href="tel:+212522000000">+212 5 22 00 00 00</a></li>
        <li>✉️ <a href="mailto:contact@synergia.ma">contact@synergia.ma</a></li>
      </ul>
      <div class="map-wrapper" aria-label="<?php echo esc_attr( synergia_connect_translate( 'Emplacement du bureau Synergia à Casablanca', 'Location of Synergia office in Casablanca' ) ); ?>">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.947894715705!2d-7.6200!3d33.5731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b7fba76f7041d%3A0x123456789abcdef!2sCasablanca!5e0!3m2!1sfr!2sma!4v0000000000000" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo esc_attr( synergia_connect_translate( 'Emplacement du bureau Synergia à Casablanca', 'Location of Synergia office in Casablanca' ) ); ?>"></iframe>
      </div>
    </div>
  </div>
</section>
<section class="content-section alt">
  <div class="container newsletter">
    <div>
      <h2><?php echo synergia_connect_translate( 'Inscription à la newsletter', 'Newsletter sign-up' ); ?></h2>
      <p><?php echo synergia_connect_translate( 'Inscrivez-vous pour recevoir nos actualités, analyses et conseils directement dans votre boîte email.', 'Subscribe to receive our latest news, market analyses, and expert advice straight to your inbox.' ); ?></p>
    </div>
    <form action="#" method="post">
      <label class="screen-reader-text" for="newsletter-email"><?php echo synergia_connect_translate( 'Email', 'Email' ); ?></label>
      <input type="email" id="newsletter-email" name="newsletter-email" placeholder="<?php echo esc_attr( synergia_connect_translate( 'Votre adresse email', 'Your email address' ) ); ?>" required>
      <button type="submit"><?php echo synergia_connect_translate( 'S’inscrire', 'Subscribe' ); ?></button>
    </form>
  </div>
</section>
<?php get_footer(); ?>
