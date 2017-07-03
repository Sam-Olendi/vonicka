<?php

/**
 * Vonicka functions and definitions
 *
 * @package Vonicka
 * @since Vonicka 1.0
 */



if ( ! function_exists( 'vonicka_setup' ) ) :

  /**
    * Sets up theme defaults and registers support for various WordPress features.
    * Note that this function is hooked into the after_setup_theme hook, which runs
    * before the init hook. The init hook is too late for some features, such as indicating
    * support post thumbnails.
    * @since Vonicka 1.0
  */

  function vonicka_setup() {

    /** Enable support for the Featured Image */
    add_theme_support( 'post-thumbnails' );


    /** This theme uses wp_nav_menu() in one location */
    register_nav_menus( array(
        'primary'       => __( 'Primary Menu', 'vonicka' ),
        'sidebar'       => __( 'Sidebar Menu', 'vonicka' ),
    ) );

    register_sidebar( array(
        'name'  => 'Main Sidebar',
        'id'    => 'main_sidebar_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar-title">',
        'after_title'   => '</h3>',
    ) );

  }

endif;
add_action( 'after_setup_theme', 'vonicka_setup' );




/**
 * Enqueue scripts and styles that the Vonicka theme uses
*/

function vonicka_assets() {

  wp_enqueue_style( 'style', get_stylesheet_uri() ); // default WP stylesheet (style.css)

  // extra stylesheets
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'boilerplate', get_template_directory_uri() . '/assets/css/boilerplate.css' );
  wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/css/icons.css' );

  // js scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ));
  wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ));
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array( 'jquery' ));

}
add_action( 'wp_enqueue_scripts', 'vonicka_assets' );




/**
 * Add a class the post excerpts
 * http://zurb.com/forrst/posts/Add_a_class_to_your_WordPress_excerpt_paragraphs-Doa
 */

function add_excerpt_class( $excerpt )
{
    $excerpt = str_replace( "<p", "<p class=\"content-feed-excerpt\"", $excerpt );
    return $excerpt;
}
 
add_filter( "the_excerpt", "add_excerpt_class" );