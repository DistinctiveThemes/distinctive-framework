<?php

/*
Plugin Name: Distinctive Framework
Plugin URI: http://www.distinctivethemes.com
Description: Distinctive Themes Core Plugin
Version: 1.2
Author: Distinctive Themes
Author URI: http://www.distinctivethemes.com
*/	

define( 'DISTINCTIVE_FRAMEWORK_PATH', trailingslashit(plugin_dir_path(__FILE__)) );
define( 'DISTINCTIVE_FRAMEWORK_VERSION', '1.2');

/**
 * Grab all custom post type functions
 */
require_once( DISTINCTIVE_FRAMEWORK_PATH . 'dt_cpt.php' );

/**
 * Everything else in the framework is conditionally loaded depending on theme options.
 * Let's include all of that now.
 */
require_once( DISTINCTIVE_FRAMEWORK_PATH . 'init.php' );
