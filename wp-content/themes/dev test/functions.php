<?php

// Enqueue scripts and styles.
// function helipad_scripts() {
// 	wp_enqueue_style( 'style', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'helipad_scripts' );

function helipad_styles() {

    wp_enqueue_style( 'screen', get_stylesheet_directory_uri() . '/css/screen.css', false, filemtime(get_stylesheet_directory() . '/css/screen.css'));

}
add_action( 'wp_enqueue_scripts', 'helipad_styles' );

function helipad_scripts() {

  $ver = "v" . filemtime( get_template_directory().'/js/production.min.js' );

    wp_register_script('production-min-js', get_template_directory_uri() . '/js/production.min.js',  array('jquery') , $ver,  true);
    wp_enqueue_script('production-min-js');

}
add_action('wp_enqueue_scripts', 'helipad_scripts');

// Remove stock WP footer Message
function wpse_edit_footer() {
  add_filter( 'admin_footer_text', 'wpse_edit_text', 11 );
}
function wpse_edit_text($content) {
  return "";
}
add_action( 'admin_init', 'wpse_edit_footer' );

?>
