<?php

	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
  add_action( 'init', 'register_my_menu' );


  if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );

    require_once( ABSPATH . WPINC . '/default-widgets.php' );

    add_action( '_admin_menu', 'wp_widgets_add_menu' );

?> 