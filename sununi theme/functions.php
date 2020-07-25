<?php
function sunUni_files(){

  wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,'1.0',true);
  wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.js'), NULL,'1.0',true);
  wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awsome','//use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1');
  wp_enqueue_style('sunUni_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sunUni_files');

Function SunSurf_features() {
  register_nav_menu('headerMenuLocation','Header Menu Location');
  register_nav_menu('footerLocationOne','Footer Location Two');
  register_nav_menu('footerLocationTwo','Footer Location One ');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'SunSurf_features');

?>
