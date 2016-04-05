<?php 

/**
 * Grab our framework options as registered by the theme.
 * By default everything is turned off.
 */

$defaults = array(
	'portfolio_post_type'   => '0',
	'team_post_type'        => '0',
	'client_post_type'      => '0',
	'template_post_type'      => '0',
	'testimonials_post_type'      => '0',
);

$framework_options = wp_parse_args( get_option('distinctive_framework_options'), $defaults);

/**
 * Register Portfolio Post Type
 */

if( '1' == $framework_options['portfolio_post_type'] ){
		add_action( 'init', 'register_portfolio' );		
		add_action( 'init', 'create_portfolio_taxonomies');
}

/**
 * Register Team Post Type
 */
if( '1' == $framework_options['team_post_type'] ){
		add_action( 'init', 'register_team');
		add_action( 'init', 'create_team_taxonomies');
}

/**
 * Register Client Post Type
 */
if( '1' == $framework_options['client_post_type'] ){
		add_action( 'init', 'register_client' );
		add_action( 'init', 'create_client_taxonomies');
}

/**
 * Register Template Post Type
 */
if( '1' == $framework_options['template_post_type'] ){
		add_action( 'init', 'register_template_post_type' );
}

/**
 * Register Testimonials Post Type
 */
if( '1' == $framework_options['testimonials_post_type'] ){
		add_action( 'init', 'register_testimonials_post_type' );
		add_action( 'init', 'create_testimonial_taxonomies');
}


