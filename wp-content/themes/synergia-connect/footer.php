<?php
/**
 * Footer template.
 *
 * @package Synergia_Connect
 */
?>
</main>
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      <div>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo1.png' ); ?>" alt="Synergia" style="max-width:160px;">
        <p><?php echo esc_html( synergia_connect_translate( 'Cabinet de conseil en stratégie et finance d’entreprise basé à Casablanca, dédié à la création de valeur durable.', 'Strategy and corporate finance advisory firm based in Casablanca, dedicated to sustainable value creation.' ) ); ?></p>
      </div>
      <div>
        <h4><?php echo esc_html( synergia_connect_translate( 'Navigation', 'Navigation' ) ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( synergia_connect_link() ); ?>"><?php echo esc_html( synergia_connect_translate( 'Accueil', 'Home' ) ); ?></a></li>
          <li><a href="<?php echo esc_url( synergia_connect_link( 'services' ) ); ?>"><?php echo esc_html( synergia_connect_translate( 'Services', 'Services' ) ); ?></a></li>
          <li><a href="<?php echo esc_url( synergia_connect_link( 'a-propos' ) ); ?>"><?php echo esc_html( synergia_connect_translate( 'À propos', 'About' ) ); ?></a></li>
          <li><a href="<?php echo esc_url( synergia_connect_link( 'contact' ) ); ?>"><?php echo esc_html( synergia_connect_translate( 'Contact', 'Contact' ) ); ?></a></li>
        </ul>
      </div>
      <div>
        <h4><?php echo esc_html( synergia_connect_translate( 'Coordonnées', 'Contact details' ) ); ?></h4>
        <ul>
          <li><?php echo esc_html( synergia_connect_translate( '123 Rue de l’Exemple, Casablanca, Maroc', '123 Example Street, Casablanca, Morocco' ) ); ?></li>
          <li><a href="tel:+212522000000">+212 5 22 00 00 00</a></li>
          <li><a href="mailto:contact@synergia.ma">contact@synergia.ma</a></li>
        </ul>
      </div>
      <div>
        <h4><?php echo esc_html( synergia_connect_translate( 'Restez connectés', 'Stay connected' ) ); ?></h4>
        <ul>
          <li><a href="https://www.linkedin.com" target="_blank" rel="noopener">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Synergia. <?php echo esc_html( synergia_connect_translate( 'Tous droits réservés.', 'All rights reserved.' ) ); ?></span>
      <span><a href="<?php echo esc_url( synergia_connect_link( 'mentions-legales' ) ); ?>"><?php echo esc_html( synergia_connect_translate( 'Mentions légales', 'Legal notice' ) ); ?></a> | <a href="<?php echo esc_url( synergia_connect_link( 'politique-de-confidentialite' ) ); ?>"><?php echo esc_html( synergia_connect_translate( 'Politique de confidentialité', 'Privacy policy' ) ); ?></a></span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
