<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inhabitent_Theme
 */

if ( ! function_exists( 'Inhabitent_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function Inhabitent_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // Inhabitent_setup
add_action( 'after_setup_theme', 'Inhabitent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function Inhabitent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'Inhabitent_content_width', 640 );
}
add_action( 'after_setup_theme', 'Inhabitent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function Inhabitent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Inhabitent_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function Inhabitent_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'Inhabitent_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function Inhabitent_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); // Adding Font Awesome.
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script(
		'searchtoggle.js',
		get_stylesheet_directory_uri() . '/js/searchtoggle.js',
		array('jquery'),
		'2.0',
		true
	);
	wp_enqueue_script('jp_search_filter');
    wp_localize_script( 'red_api', 'api_vars', array(
      'nonce' => wp_create_nonce( 'wp_rest' ),
      'success' => 'Thanks, your submission was received!',
      'failure' => 'Your submission could not be processed.',
    ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Inhabitent_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';




/** 
* Changes the default wordpress logo in Log In page
*/
function custom_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 2rem;
			background-size: 220px !important; width: 230px !important;background-position: bottom !important;
        }
    </style>
<?php }
add_action( 'login_header', 'custom_login_logo' );



