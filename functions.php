<?php

function shd_load_scripts_me(){

  //main style
  wp_enqueue_style('main_style',get_stylesheet_uri() );
    // sub style
    #$handle, $src = false, $deps = array(), $ver = false, $in_footer = false
   wp_enqueue_style('site_style',
   get_template_directory_uri() . '/assets/css/site-style.css' );

   // sub scripts
   #$handle, $src = false, $deps = array(), $ver = false, $in_footer = false
   wp_enqueue_script( 'site_scripts',
   get_template_directory_uri() . '/assets/js/site-scripts.js',
   ['jquery'],
    false, true );

}
//use custom function for load main && sub style AND sub scripts

add_action('wp_enqueue_scripts','shd_load_scripts_me' );
