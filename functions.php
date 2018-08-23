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
	function inpsyde_task_setup() {
		load_theme_textdomain( 'inpsyde-task', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'inpsyde-task' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'inpsyde_task_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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

function inpsyde_task_scripts() {
	wp_enqueue_style( 'inpsyde-task-style', get_stylesheet_uri() );

	wp_enqueue_style( 'inpsyde-task-style', get_stylesheet_uri().'/styles/style.css', array());

	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css');
	wp_enqueue_style('wpb-google-fonts', '//fonts.googleapis.com/css?family=Sanchez|Teko',array());

	wp_enqueue_script('', get_template_directory_uri() .'/assets/script.js', array('jquery'), 1.0, true);

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
