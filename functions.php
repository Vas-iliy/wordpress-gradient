<?php
/**
 * gradient functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gradient
 */

require_once get_template_directory() . '/Law_Header_Memu.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gradient_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gradient_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gradient, use a find and replace
		 * to change 'gradient' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gradient', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Меню в шапке', 'gradient' ),
				'footer-left-menu' => esc_html__( 'Меню в подвале левое', 'gradient' ),
				'footer-centr-menu' => esc_html__( 'Меню в подвале центральное', 'gradient' ),
				'footer-right-menu' => esc_html__( 'Меню в подвале правое', 'gradient' ),
			)
		);

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gradient_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
endif;
add_action( 'after_setup_theme', 'gradient_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gradient_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gradient_content_width', 640 );
}
add_action( 'after_setup_theme', 'gradient_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gradient_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Top', 'girly' ),
			'id'            => 'sidebar-top',
			'before_widget' => '<span class="question">',
			'after_widget'  => '</span>',
			'before_title'  => '<h4 class="text-white text-strong">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Form', 'girly' ),
			'id'            => 'sidebar-form',
			'class'         => 'sidebar-form',
			'description'   => esc_html__( 'Add widgets here.', 'girly' ),
			'before_widget' => '<div class="form">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="email">',
			'after_title'   => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Social', 'girly' ),
			'id'            => 'sidebar-soc',
			'description'   => esc_html__( 'Add widgets here.', 'girly' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-white text-strong">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'girly' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'girly' ),
			'before_widget' => '<div class="col-lg-3 col-4 col-6">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="form__title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'gradient_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gradient_scripts() {
	wp_enqueue_style( 'gradient-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gradient-style-scc', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'gradient-bootstrapcdn-scc', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

	wp_enqueue_script('gradient-kit-fontawesome-js', 'https://kit.fontawesome.com/ff2f3aab2f.js');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('gradient-ajax-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '', true);
	wp_enqueue_script('gradient-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('gradient-index-js', get_template_directory_uri() . '/assets/js/index.js', array(), '', true);

}
add_action( 'wp_enqueue_scripts', 'gradient_scripts' );