<?php
/**
 * Header template.
 *
 * @package Synergia_Connect
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" role="banner">
  <div class="container header-inner">
    <div class="branding" aria-label="Synergia">
      <a href="<?php echo esc_url( synergia_connect_link() ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo1.png' ); ?>" alt="Synergia" />
      </a>
    </div>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="contextualMenu">
      <span class="menu-toggle-label"><?php esc_html_e( 'Menu', 'synergia-connect' ); ?></span>
      <span aria-hidden="true">☰</span>
    </button>
  </div>
</header>
<div class="contextual-menu" id="contextualMenu" aria-hidden="true">
  <div class="menu-header">
    <h2 class="menu-title">Synergia</h2>
    <button type="button" class="close-menu" aria-label="<?php esc_attr_e( 'Close menu', 'synergia-connect' ); ?>">&times;</button>
  </div>
  <nav class="menu-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'synergia-connect' ); ?>">
    <?php
    wp_nav_menu( [
      'theme_location' => 'primary',
      'container'      => false,
      'fallback_cb'    => function () {
        echo '<ul>';
        $links = [
          synergia_connect_translate( 'Accueil', 'Home' ) => synergia_connect_link(),
          synergia_connect_translate( 'Services', 'Services' ) => synergia_connect_link( 'services' ),
          synergia_connect_translate( 'À propos', 'About' ) => synergia_connect_link( 'a-propos' ),
          synergia_connect_translate( 'Contact', 'Contact' ) => synergia_connect_link( 'contact' ),
        ];
        foreach ( $links as $label => $url ) {
          printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( $url ), esc_html( $label ) );
        }
        echo '</ul>';
      },
    ] );
    ?>
  </nav>
  <div class="language-switcher" aria-label="Language switcher">
    <?php $current_lang = synergia_connect_get_lang(); ?>
    <a href="<?php echo esc_url( synergia_connect_language_url( 'fr' ) ); ?>" class="<?php echo 'fr' === $current_lang ? 'active' : ''; ?>">FR</a>
    <a href="<?php echo esc_url( synergia_connect_language_url( 'en' ) ); ?>" class="<?php echo 'en' === $current_lang ? 'active' : ''; ?>">EN</a>
  </div>
</div>
<main class="site-main" role="main">
