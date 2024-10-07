<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;



// Add logo upload support for theme (Customize > Site Identity > Select Logo)
function theme_setup() {
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_setup');



// Add menu nav support for theme (Appearance > Menus)
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'add_Main_Nav' );



// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function normalize_CSS() {
  wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'normalize_CSS');



// Prevent css styles from caching!!!
function child_theme_css() {
  wp_enqueue_style( 'main_css', trailingslashit( get_stylesheet_directory_uri() ) .  'assets/css/main.css?t=' . time(), array() );
}
add_action( 'wp_enqueue_scripts', 'child_theme_css', 10 );



// Tailwind
function enqueue_tailwind_css() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-css',
        'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.18/tailwind.min.css',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');



// Custom javascript
function custom_javascript() {
    wp_enqueue_script('custom-javascript',  trailingslashit( get_stylesheet_directory_uri() ) . '/assets/js/custom.js', array() );
}
add_action('wp_enqueue_scripts', 'custom_javascript');



// Prevent Elementor Text Editor, from removing <p> tags
function tiny_mce_dont_remove_p_tags($options) {
  $options['wpautop'] = false; // Keep <p> tags
  return $options;
}
add_filter( 'tiny_mce_before_init', 'tiny_mce_dont_remove_p_tags');



// Add page slug classname to body tag
function add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );



// Prevent big images from being resized
add_filter( 'big_image_size_threshold', '__return_false' );



