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
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo1.png' ); ?>" alt="Logo Synergia" style="max-width:160px;">
        <p><?php esc_html_e( 'Cabinet de conseil en stratégie et finance d’entreprise basé à Casablanca, dédié à la création de valeur durable.', 'synergia-connect' ); ?></p>
      </div>
      <div>
        <h4><?php esc_html_e( 'Navigation', 'synergia-connect' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Accueil / Home', 'synergia-connect' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/index.php/services/' ) ); ?>"><?php esc_html_e( 'Services', 'synergia-connect' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/index.php/a-propos/' ) ); ?>"><?php esc_html_e( 'À propos / About', 'synergia-connect' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/index.php/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'synergia-connect' ); ?></a></li>
        </ul>
      </div>
      <div>
        <h4><?php esc_html_e( 'Coordonnées', 'synergia-connect' ); ?></h4>
        <ul>
          <li>123 Rue de l’Exemple, Casablanca, Maroc</li>
          <li><a href="tel:+212522000000">+212 5 22 00 00 00</a></li>
          <li><a href="mailto:contact@synergia.ma">contact@synergia.ma</a></li>
        </ul>
      </div>
      <div>
        <h4><?php esc_html_e( 'Restez connectés', 'synergia-connect' ); ?></h4>
        <ul>
          <li><a href="https://www.linkedin.com" target="_blank" rel="noopener">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Synergia. <?php esc_html_e( 'Tous droits réservés.', 'synergia-connect' ); ?></span>
      <span><a href="<?php echo esc_url( home_url( '/index.php/mentions-legales/' ) ); ?>"><?php esc_html_e( 'Mentions légales', 'synergia-connect' ); ?></a> | <a href="<?php echo esc_url( home_url( '/index.php/politique-de-confidentialite/' ) ); ?>"><?php esc_html_e( 'Politique de confidentialité', 'synergia-connect' ); ?></a></span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
