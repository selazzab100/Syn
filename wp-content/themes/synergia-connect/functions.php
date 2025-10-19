<?php
/**
 * Synergia Connect theme functions.
 */

define( 'SYNERGIA_CONNECT_VERSION', '1.0.0' );

define( 'SYNERGIA_CONNECT_DIR', get_template_directory() );

define( 'SYNERGIA_CONNECT_URI', get_template_directory_uri() );

add_action( 'after_setup_theme', function () {
    load_theme_textdomain( 'synergia-connect', SYNERGIA_CONNECT_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'synergia-connect' ),
    ] );
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'synergia-connect-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@600;700&display=swap', [], null );
    wp_enqueue_style( 'synergia-connect-style', get_stylesheet_uri(), [ 'synergia-connect-fonts' ], SYNERGIA_CONNECT_VERSION );

    wp_enqueue_script( 'synergia-connect-scripts', SYNERGIA_CONNECT_URI . '/assets/js/theme.js', [], SYNERGIA_CONNECT_VERSION, true );
    wp_localize_script( 'synergia-connect-scripts', 'SynergiaTheme', [
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ] );
} );

add_filter( 'body_class', function ( $classes ) {
    $classes[] = 'synergia-connect';
    return $classes;
} );
