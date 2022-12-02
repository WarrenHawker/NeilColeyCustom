<?php
//LIVE WEBSITE FILE
if(!defined('ABSPATH') ) EXIT; //Exit if accessed directly
$roots_includes = array(
  '/functions/custom-post-types.php',
);

foreach($roots_includes as $file){
  if(!$filepath = locate_template($file)) {
    trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function NCBigBand_files() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_style('styles', get_template_directory_uri() . '/CSS/global.css');
    wp_enqueue_script("NCBigBandJS", get_theme_file_uri("/src/index.js"), NULL, "1.0", true);
    // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('google-fonts', '//https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap');
}


add_action('wp_enqueue_scripts', 'NCBigBand_files');
add_action('init', 'NCBigBandPostTypes');
add_theme_support('post-thumbnails');