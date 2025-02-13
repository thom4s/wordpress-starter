<?php
/**
 * custom-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/* 
 * CSS ADMIN
 *************************/

function admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


function custom_setup() {

	load_theme_textdomain( 'custom-theme', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );
	

	register_nav_menus( array(
        'header-menu' => 'Header menu',
		'header-top'  => 'Header top',
        'footer-menu' => 'Footer menu',
    ) );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'custom_setup' );



/**
 * Enqueue scripts and styles.
 */
function custom_scripts() {

	// ENQUEUE STYLES
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/style.css', array(), _S_VERSION );

	
	// ENQUEUE SCRIPTS
	wp_enqueue_script( 'utils', get_template_directory_uri() . '/assets/js/utils.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/main.min.js', array('utils'), _S_VERSION, true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('utils', 'main'), _S_VERSION, true );


	// ENQUEUE SWIPER
	wp_enqueue_style('swiper-styles', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css', null);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', null, true);
	wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', null, true);

	
	// ENQUEUE PARTICULAR SCRIPTS
	wp_add_inline_script( 'main', 'const ajax_datas = ' . json_encode( array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'handle_contents_loading' )
    ) ), 'before' );

	wp_enqueue_script( 'loaders', get_template_directory_uri() . '/assets/js/loaders.js', array("main"), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Functions which load content (ajax).
 */
require get_template_directory() . '/inc/loaders.php';


/**
 * Images sizes.
 */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'theme_tiny', 200 );
	add_image_size( 'theme_small', 500 );
	add_image_size( 'theme_medium', 700 );
	add_image_size( 'theme_large', 1300 );
	add_image_size( 'theme_wide', 1800 );
}

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on mep_2021, use a find and replace
 * to change 'mep_2021' to the name of your theme in all the template files.
*/

load_theme_textdomain( 'custom-theme', get_template_directory() . '/languages' );