<?php

function university_files() {
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_script('university-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); // If you're using vanilla JS, the third argument should be null. The fourth argument is the version number of your script. The fifth argument tells WP whether or not to load the script at the bottom of the html, which is standard practice and better for performance.
}
add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
  add_theme_support('title-tag');
  // register_nav_menu('header_menu_location', 'Header Menu Location');
  // register_nav_menu('footer_menu_location_one', 'Footer Menu Location One');
  // register_nav_menu('footer_menu_location_two', 'Footer Menu Location Two');
}
add_action('after_setup_theme', 'university_features');