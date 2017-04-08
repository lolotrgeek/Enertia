<?php
/**
 * energy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package energy
 */

if ( ! function_exists( 'energy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function energy_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on energy, use a find and replace
	 * to change 'energy' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'energy', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'energy' ),
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
	add_theme_support( 'custom-background', apply_filters( 'energy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'energy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function energy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'energy_content_width', 640 );
}
add_action( 'after_setup_theme', 'energy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function energy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'energy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'energy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  	register_sidebar( array(
		'name'          => esc_html__( 'Menu Widget', 'energy' ),
		'id'            => 'main-menu',
		'description'   => esc_html__( 'Menu Widget', 'energy' ),
		'before_widget' => '<div class="menu-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<span style="display:none;">',
		'after_title'   => '</span>',
	) );  
	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'energy' ),
		'id'            => 'home-header',
		'description'   => esc_html__( 'Homepage Header', 'energy' ),
		'before_widget' => '<header class="major container 75&#037">',
		'after_widget'  => '</header>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) ); 
   	
    register_sidebar( array(
		'name'          => esc_html__( 'First Definition', 'energy' ),
		'id'            => 'home-def-1',
		'description'   => esc_html__( 'Homepage Definition.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Second Definition', 'energy' ),
		'id'            => 'home-def-2',
		'description'   => esc_html__( 'Homepage Definition.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Third Definition', 'energy' ),
		'id'            => 'home-def-3',
		'description'   => esc_html__( 'Homepage Definition.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) ); 
	register_sidebar( array(
		'name'          => esc_html__( 'Home Statement', 'energy' ),
		'id'            => 'home-statement',
		'description'   => esc_html__( 'Homepage statement.', 'energy' ),
		'before_widget' => '<div class="box container">',
		'after_widget'  => '</div>',
		'before_title'  => '<header><h2>',
		'after_title'   => '</h2></header>',
	) );       
    register_sidebar( array(
		'name'          => esc_html__( 'Home last', 'energy' ),
		'id'            => 'home-footer',
		'description'   => esc_html__( 'Homepage Footer', 'energy' ),
		'before_widget' => '<div class="major container 75%">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Content', 'energy' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Footer content.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<header id="contact" class="major last"><h2>',
		'after_title'   => '</h2></header>',
                
	) );     
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Social', 'energy' ),
		'id'            => 'footer-social',
		'description'   => esc_html__( 'Footer social icons and links.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer menu', 'energy' ),
		'id'            => 'footer-menu',
		'description'   => esc_html__( 'Footer sitemap or menu.', 'energy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );      
}
add_action( 'widgets_init', 'energy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function energy_scripts() {
	wp_enqueue_style( 'energy-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',false,'','all');
    
   wp_enqueue_script( 'skel.min', get_template_directory_uri() . '/js/skel.min.js', array ( 'jquery' ),'' , true); 
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ),'' , true);

    wp_enqueue_script( 'util', get_template_directory_uri() . '/js/util.js', array ( 'jquery' ), '', true);


	//wp_enqueue_script( 'energy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'energy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/ie8.css',false,'','all');
        wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/ie/html5shiv.js', array ( 'jquery' ), '', true);
        wp_enqueue_script( 'respond.min', get_template_directory_uri() . '/js/ie/respond.min.js', array ( 'jquery' ),'', true);
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'energy_scripts' );

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

/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);

  function splen_remove_admin_bar() {
	if( !is_super_admin() ) 
		add_filter( 'show_admin_bar', '__return_false' );
}
add_action('wp', 'splen_remove_admin_bar');

/**
 * Buddypress Changes
 */
global $bp;
bp_core_remove_nav_item($bp->activity->id);