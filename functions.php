<?php
/**
 * Hike Trampos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hike_Trampos
 */

if ( ! function_exists( 'hike_trampos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hike_trampos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hike Trampos, use a find and replace
		 * to change 'hike-trampos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hike-trampos', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'hike-trampos' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hike_trampos_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hike_trampos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hike_trampos_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hike_trampos_content_width', 640 );
}
add_action( 'after_setup_theme', 'hike_trampos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hike_trampos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hike-trampos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hike-trampos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hike_trampos_widgets_init' );

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

/**
 * Enqueue scripts and styles.
 */
function hike_trampos_scripts() {

	wp_enqueue_style( 'hike-trampos-style', get_stylesheet_uri() );

	wp_enqueue_style( 'materialize-css', get_stylesheet_directory_uri() . '/materialize/css/materialize.min.css');

	wp_enqueue_script( 'materialize-js', get_template_directory_uri() . '/materialize/js/materialize.min.js');

	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/slick/slick.css');

	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick-theme.css');

	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js');

	wp_enqueue_script( 'materialize-initialization', get_template_directory_uri() . '/js/materialize-initialization.js', array('jquery'));

	wp_enqueue_script( 'hike-trampos-script', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	wp_enqueue_script( 'hike-trampos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hike-trampos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'testimonials-slide', get_template_directory_uri() . '/js/testimonials-slide.js' );

  wp_enqueue_script( 'smooth-scrolling', get_template_directory_uri() . '/js/smooth-scrolling.js', NULL, microtime(), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hike_trampos_scripts' );

function hike_post_types() {
	// Register Testimonials post type|
	register_post_type('testimonials', array(
		'supports' => array('title'),
		'public' => true,
		'labels' => array(
			'name' => 'Testimonials',
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'all_items' => 'All Testimonials',
			'singular_name' => 'Testimonials'
		),
		'menu_icon' => 'dashicons-testimonial',
		'publicly_queryable'	=> false
	));
	// Register Questions post type|
	register_post_type('questions', array(
		'supports' => array('title'),
		'public' => true,
		'labels' => array(
			'name' => 'Questions',
			'add_new_item' => 'Add New Question',
			'edit_item' => 'Edit Question',
			'all_items' => 'All Questions',
			'singular_name' => 'Questions'
		),
		'menu_icon' => 'dashicons-format-status',
		'publicly_queryable'	=> false
	));
	// Register Partners post type|
	register_post_type('partners', array(
		'supports' => array('title'),
		'public' => true,
		'labels' => array(
			'name' => 'Partners',
			'add_new_item' => 'Add New Partners',
			'edit_item' => 'Edit Partner',
			'all_items' => 'All Partners',
			'singular_name' => 'Partners'
		),
		'menu_icon' => 'dashicons-businessman',
		'publicly_queryable'	=> false
	));
}
add_action('init', 'hike_post_types');

/**
 * Custom function to get the current page template name and compare with the startup page
 * template name. If it's the same name, defines a variable to 1, otherwise, defines to 0.
 */

function is_startup_page() {
	$page_template = get_page_template_slug();
	$startup_template = 'startup-template.php';
	$is_startup_page = $page_template == $startup_template ? 1 : 0;
	return $is_startup_page;
}

/**
 * Require navbar function
 */
require get_template_directory() . '/inc/navbar.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom fields created with Plugin Advanced Custom Fields.
 */
require get_template_directory() . '/inc/custom-fields.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
