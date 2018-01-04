<?php

namespace ema_theme\inc;

/**
 * menus
 */

class menus
{

	/*
		Contruct class to activate actions and hhooks as soon as the class is initialized
	*/
	public function __construct()
	{
		add_action( 'after_setup_theme', array(&$this, 'menus') );
	}

	public function menus()
	{
		/*
		 Register all your menus here
		*/
		register_nav_menus(array(
			'mega-meu'						=> esc_html( 'Mega Menu', 'ema_theme' );
		));
	}
}