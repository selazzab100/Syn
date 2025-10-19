<?php
/**
 * Main template file.
 *
 * @package Synergia_Connect
 */

get_header();
?>
<div class="container content-section">
  <h1><?php esc_html_e( 'Contenu', 'synergia-connect' ); ?></h1>
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  }
  ?>
</div>
<?php get_footer(); ?>
