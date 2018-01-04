<?php
/*

@package ema_theme

  ===========================
    FRONT-END ENQUEUE FUNCTIONS
  ===========================
*/

function ema_load_scripts(){

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/ema.css', array(), '1.0', 'all' );

  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.12.4', true );
	wp_enqueue_script( 'jquery' );
	
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ema_load_scripts' );
