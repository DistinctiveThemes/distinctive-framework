<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class distinctivethemes_wp_import extends WP_Import
{
	function set_menus()
	{
		global $distinctivethemes_config;
		//get all registered menu locations
		$locations   = get_theme_mod('nav_menu_locations');
		
		//get all created menus
		$distinctivethemes_menus  = wp_get_nav_menus();
		
		if(!empty($distinctivethemes_menus) && !empty($distinctivethemes_config['nav_menus']))
		{
			foreach($distinctivethemes_menus as $distinctivethemes_menu)
			{
				//check if we got a menu that corresponds to the Menu name array ($distinctivethemes_config['nav_menus']) we have set in functions.php
				if(is_object($distinctivethemes_menu) && in_array($distinctivethemes_menu->name, $distinctivethemes_config['nav_menus']))
				{
					$key = array_search($distinctivethemes_menu->name, $distinctivethemes_config['nav_menus']);
					if($key)
					{
						//if we have found a menu with the correct menu name apply the id to the menu location
						$locations[$key] = $distinctivethemes_menu->term_id;
					}
				}
			}
		}
		//update the theme
		set_theme_mod( 'nav_menu_locations', $locations);
	}
}