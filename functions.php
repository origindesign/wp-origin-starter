<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package origin
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ORIGIN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function origin_setup() {
	add_editor_style( './assets/css/main.min.css' );
	add_editor_style( './assets/css/editor.min.css' );
}
add_action( 'after_setup_theme', 'origin_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function origin_styles() {
	wp_enqueue_style(
		'origin-style',
		get_stylesheet_uri(),
		[],
		ORIGIN_VERSION
	);
	wp_enqueue_style(
		'origin-shared-styles',
		get_theme_file_uri( 'assets/css/main.min.css' ),
		[],
		ORIGIN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'origin_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );
