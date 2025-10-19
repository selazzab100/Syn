<?php
/**
 * Default page template.
 *
 * @package Synergia_Connect
 */

get_header();
?>
<section class="content-section">
  <div class="container">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        echo '<article class="default-page">';
        the_title( '<h1>', '</h1>' );
        echo '<div class="page-content">';
        the_content();
        echo '</div></article>';
      }
    }
    ?>
  </div>
</section>
<?php get_footer(); ?>
