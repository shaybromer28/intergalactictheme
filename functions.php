<?php
add_theme_support('html5', array('gallery', 'caption'));
add_theme_support('custom-background');

//Enqueue Style Sheets
function wpt_theme_styles () {
  wp_enqueue_style ( 'main_css', get_template_directory_uri() .
          '/style.css');
  wp_enqueue_style ( 'header_css', get_template_directory_uri() .
          '/css/header.css');
  wp_enqueue_style ( 'menu_css', get_template_directory_uri() .
          '/css/menu.css');
}
add_action ('wp_enqueue_scripts', 'wpt_theme_styles');

//Set up Menus
add_theme_support('menus');
function register_theme_menus () {
    register_nav_menus (
      array (
        'primary_menu' => __('Primary Menu')
      )
    );
}
add_action('init', 'register_theme_menus');

//Set Blog Excerpt character length
function wpt_excerpt_length ($length) {
  return 16;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999);

function wpt_theme_js () {
  wp_enqueue_script ('hamburger_js', get_template_directory_uri () .
    '/js/hamburger.js', array('jquery'), '', false);
}

add_action ('wp_enqueue_scripts', 'wpt_theme_js');

?>
