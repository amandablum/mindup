<?php
/**
 * mindup functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mindup
 */

if ( ! function_exists( 'mindup_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mindup_setup() {

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
		'primary' => esc_html__( 'Primary', 'mindup' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mindup_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}
endif;
add_action( 'after_setup_theme', 'mindup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mindup_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'mindup_content_width', 640 );

}
add_action( 'after_setup_theme', 'mindup_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function mindup_scripts() {

	wp_enqueue_style( 'mindup-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mindup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mindup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'mindup_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Mindup Widget Areas
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( ! function_exists( 'mindup_sidebars' ) ) :

// Register Sidebars
function mindup_sidebars() {

	$args = array(
		'id'            => 'footercol1',
		'class'         => 'foot1',
		'name'          => __( 'Footer Column 1', 'text_domain' ),
		'description'   => __( 'The leftmost column in the footer. ', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footercol4',
		'class'         => 'foot4',
		'name'          => __( 'Footer Column 4', 'text_domain' ),
		'description'   => __( 'The rightmost column in the footer. ', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footbottom',
		'class'         => 'footbot',
		'name'          => __( 'Footer Bottom', 'text_domain' ),
		'description'   => __( 'This is the footer at the bottom of the page, containing the 501c3 Disclaimer', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'fullwidthtemplatesidebar',
		'name'          => __( 'Full Width Template Sidebar', 'text_domain' ),
		'description'   => __( 'You see this sidebar on pages using the Full Width with Sidebar Page Template. ', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'mindup_sidebars' );

endif;
