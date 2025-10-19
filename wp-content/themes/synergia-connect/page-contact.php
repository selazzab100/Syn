<?php
/**
 * Contact page.
 *
 * @package Synergia_Connect
 */

get_header();
?>
<section class="page-title">
  <h1>Contact Synergia<br><span lang="en">Contact Synergia</span></h1>
  <p>Échangeons sur vos projets / Let’s discuss your projects</p>
</section>
<section class="content-section">
  <div class="container contact-grid">
    <div class="contact-form">
      <h2>Formulaire de contact</h2>
      <form action="#" method="post">
        <label for="cf-name">Nom complet</label>
        <input type="text" id="cf-name" name="cf-name" required>
        <label for="cf-email">Email professionnel</label>
        <input type="email" id="cf-email" name="cf-email" required>
        <label for="cf-phone">Téléphone</label>
        <input type="tel" id="cf-phone" name="cf-phone">
        <label for="cf-company">Entreprise</label>
        <input type="text" id="cf-company" name="cf-company">
        <label for="cf-message">Message</label>
        <textarea id="cf-message" name="cf-message" required></textarea>
        <button class="btn-primary" type="submit">Envoyer</button>
      </form>
    </div>
    <div class="contact-info">
      <h3>Coordonnées</h3>
      <ul>
        <li>📍 123 Rue de l’Exemple, Quartier des Affaires, Casablanca, Maroc</li>
        <li>📞 <a href="tel:+212522000000">+212 5 22 00 00 00</a></li>
        <li>✉️ <a href="mailto:contact@synergia.ma">contact@synergia.ma</a></li>
      </ul>
      <div class="map-wrapper" aria-label="Emplacement du bureau Synergia à Casablanca">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.947894715705!2d-7.6200!3d33.5731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b7fba76f7041d%3A0x123456789abcdef!2sCasablanca!5e0!3m2!1sfr!2sma!4v0000000000000" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Emplacement du bureau Synergia à Casablanca"></iframe>
      </div>
    </div>
  </div>
</section>
<section class="content-section alt">
  <div class="container newsletter">
    <div>
      <h2>Inscription à la newsletter</h2>
      <p>Inscrivez-vous pour recevoir nos actualités, analyses et conseils directement dans votre boîte email.</p>
      <p lang="en">Subscribe to receive our latest news, market analyses, and expert advice straight to your inbox.</p>
    </div>
    <form action="#" method="post">
      <label class="screen-reader-text" for="newsletter-email">Email</label>
      <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Votre adresse email / Your email" required>
      <button type="submit">S’inscrire / Subscribe</button>
    </form>
  </div>
</section>
<?php get_footer(); ?>
