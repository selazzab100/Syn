<?php
/**
 * Synergia Connect theme functions.
 */

define( 'SYNERGIA_CONNECT_VERSION', '1.0.0' );

define( 'SYNERGIA_CONNECT_DIR', get_template_directory() );

define( 'SYNERGIA_CONNECT_URI', get_template_directory_uri() );

/**
 * Returns current language code (fr by default).
 */
function synergia_connect_get_lang() {
    $lang = isset( $_GET['lang'] ) ? sanitize_key( wp_unslash( $_GET['lang'] ) ) : '';

    return in_array( $lang, [ 'fr', 'en' ], true ) ? $lang : 'fr';
}

/**
 * Checks if current language is French.
 */
function synergia_connect_is_french() {
    return 'fr' === synergia_connect_get_lang();
}

/**
 * Helper to translate strings without duplicating templates.
 */
function synergia_connect_translate( $fr, $en ) {
    return synergia_connect_is_french() ? $fr : $en;
}

/**
 * Builds a URL keeping the language query parameter for internal links.
 */
function synergia_connect_link( $path = '' ) {
    $lang   = synergia_connect_get_lang();
    $suffix = trim( $path, '/' );

    $url = home_url( '/index.php/' . ( $suffix ? $suffix . '/' : '' ) );

    return add_query_arg( 'lang', $lang, $url );
}

/**
 * Generates the language switch URL for the current page.
 */
function synergia_connect_language_url( $lang ) {
    $lang = in_array( $lang, [ 'fr', 'en' ], true ) ? $lang : 'fr';

    $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/index.php/';
    $parts       = wp_parse_url( $request_uri );
    $path        = isset( $parts['path'] ) ? $parts['path'] : '/index.php/';
    if ( '/' === $path ) {
        $path = '/index.php/';
    }

    $args = [];
    if ( isset( $parts['query'] ) ) {
        parse_str( $parts['query'], $args );
    }

    $args['lang'] = $lang;

    $url = home_url( $path );

    return add_query_arg( $args, $url );
}

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
