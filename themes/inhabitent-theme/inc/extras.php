<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus

function inhabitent_remove_submenus() {
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


function my_loginlogo() {
  echo '<style type="text/css">

  .login h1 a {
    background-image: url(' . get_template_directory_uri() . './images/logo/inhabitent-logo-text-dark.svg) !important;
  }
</style>';
}
add_action('login_head', 'my_loginlogo'); 

/** Adjust post limit on shop page */

function product_posts_per_page ( $query ) {
  if ( is_post_type_archive('product') && !is_admin() && $query->is_main_query() ) {
    $query->set('posts_per_page', '16' );
    $query->set('orderby', 'title' );
    $query->set('order', 'ASC' );
  }
}
add_action ( 'pre_get_posts', 'product_posts_per_page');



function my_styles_method() {

  if(!is_page_template( 'about.php' )){
    return;
  }

       $url = CFS()->get( 'about_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
       $custom_css = "
       .about-hero{
        background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ), url({$url}) no-repeat center bottom; 
        background-size: cover;   
        height: 100vh;

      }
      .our-story .our-team {

      }}";
      wp_add_inline_style( 'red-starter-style', $custom_css );
    }
    add_action( 'wp_enqueue_scripts', 'my_styles_method' );

    function new_excerpt_more( $more ) {
      return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );
