<?php
/**
 * Goldy Portfolio theme functions.
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'goldy-portfolio', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
} );
