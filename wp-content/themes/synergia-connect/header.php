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
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
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
          __( 'Home', 'synergia-connect' ) => home_url( '/' ),
          __( 'Services', 'synergia-connect' ) => home_url( '/index.php/services/' ),
          __( 'About', 'synergia-connect' ) => home_url( '/index.php/a-propos/' ),
          __( 'Contact', 'synergia-connect' ) => home_url( '/index.php/contact/' ),
          __( 'Strategy & Operational Excellence', 'synergia-connect' ) => home_url( '/index.php/strategie-excellence-operationnelle/' ),
          __( 'Transactions & Due Diligence', 'synergia-connect' ) => home_url( '/index.php/transactions-due-diligence/' ),
          __( 'Corporate Finance & Modeling', 'synergia-connect' ) => home_url( '/index.php/corporate-finance-modelisation/' ),
          __( 'CFO Advisory & Finance Transformation', 'synergia-connect' ) => home_url( '/index.php/cfo-advisory-transformation-finance/' ),
          __( 'Fundraising & Financing', 'synergia-connect' ) => home_url( '/index.php/financement-levee-de-fonds/' ),
          __( 'Grants & Public Funding', 'synergia-connect' ) => home_url( '/index.php/subventions-financements-publics/' ),
          __( 'Academy & Training', 'synergia-connect' ) => home_url( '/index.php/academie-formation/' ),
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
    <a href="<?php echo esc_url( home_url( '/index.php/' ) ); ?>" class="active">FR</a>
    <a href="<?php echo esc_url( home_url( '/index.php/en/' ) ); ?>">EN</a>
  </div>
</div>
<main class="site-main" role="main">
