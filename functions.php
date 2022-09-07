<?php
function portfolio_theme_styles_and_scripts() {
	 // Enqueue styles
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i|Oswald:400,500,700|Pontano+Sans', array(), null );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
	// wp_enqueue_style('layout', get_stylesheet_directory_uri() . '/css/layout.css', false, '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'portfolio_theme_styles_and_scripts' );
add_theme_support( 'post-thumbnails' );

/**
 * Enables the HTTP Strict Transport Security (HSTS) header in WordPress.
 * Includes preloading with subdomain support.
 * Add other security headers
 */
function tg_enable_strict_transport_security_hsts_header_wordpress() {
	header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'X-XSS-Protection: 1; mode=block' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'no-referrer-when-downgrade' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );
