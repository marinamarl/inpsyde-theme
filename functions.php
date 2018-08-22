<?php
/**
 * inpsyde task functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inpsyde_Task
 */
require_once( __DIR__ . '\includes\event-model.php');
if ( ! function_exists( 'inpsyde_task_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inpsyde_task_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on inpsyde task, use a find and replace
		 * to change 'inpsyde-task' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'inpsyde-task', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'inpsyde-task' ),
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
		add_theme_support( 'custom-background', apply_filters( 'inpsyde_task_custom_background_args', array(
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
add_action( 'after_setup_theme', 'inpsyde_task_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inpsyde_task_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'inpsyde_task_content_width', 640 );
}
add_action( 'after_setup_theme', 'inpsyde_task_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inpsyde_task_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'inpsyde-task' ),
		'id'            => 'tag-widget',
		'description'   => esc_html__( "Add a text widget with the site's tag line here.", 'inpsyde-task' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'inpsyde_task_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inpsyde_task_scripts() {
	wp_enqueue_style( 'inpsyde-task-style', get_stylesheet_uri() );

	wp_enqueue_style( 'inpsyde-task-style', get_stylesheet_uri().'/styles/style.css', array());

	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css');
	wp_enqueue_style('wpb-google-fonts', '//fonts.googleapis.com/css?family=Sanchez|Teko',array());

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inpsyde_task_scripts' );


add_action( 'init', 'events_register_post_type' );
function events_register_post_type() {

  $args = array(
        'label'  => 'Events',
    'labels' => array(
        'name'          => 'Events',
        'singular_name' => 'Events',
        'add_new_item'  => 'Add New Event',
        'edit_item'     => 'Edit Event',
        'new_item'      => 'New Event',
        'view_item'     => 'View Event',
        'search_items'  => 'Search Events',
        'not_found'     => 'No Events',
    ),
    'description' => 'A post type used to provide information on Events.',
		'has_archive' => true,
    'public'      => true,
    'show_ui'     => true,
    'supports'    => array(
        'title',
        'editor',
        'excerpt',
    ),
  );

  register_post_type( 'event', $args );

}
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function all_excerpts_get_more_link($post_excerpt) {
	if ( ! is_single() ) {
    return '<span>' . $post_excerpt . '</span>' . '<span class="readmore"><a target="_blank" href="'. get_permalink($post->ID) . '">' . '  [read more]' . '</a></span>';
	}
	else{
		return '<span>' . $post_excerpt . '</span>' ;
	}
}
add_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');
