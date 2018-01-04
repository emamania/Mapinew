<?php

/*

@package ema_theme


    ===========================
          ADMIN page
    ===========================
*/

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function ema_add_admin_page() {

  add_menu_page( 'Ema Theme Options', 'Ema.io', 'manage_options', 'ema_travel', 'ema_theme_create_page', 'dashicons-image-filter', 40 ); //get_template_directory_uri() . '/img/lucho-icon.png'
}
add_action('admin_menu', 'ema_add_admin_page' );

function ema_theme_create_page() {
  // Generation  of our admin page
}



//+++++++++++++++++++++++++
function ema_admin_enqueue_scripts() {
  global $pagenow, $typenow;
  // $screen = get_current_screen();
  // var_dump($screen->post_type);
	// var_dump($pagenow, $typenow);
	
	if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'tours' ) {
		wp_enqueue_style( 'ema-admin-css', plugins_url( 'css/ema_admin.css', __FILE__ ) );
		wp_enqueue_script( 'ema-adminjs', plugins_url( 'js/ema_admin.js', __FILE__ ), array( 'jquery', 'jquery-ui-datepicker' ), '20160204', true );
  }
  
}
add_action( 'admin_enqueue_scripts', 'ema_admin_enqueue_scripts' );
