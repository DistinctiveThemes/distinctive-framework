<?php

//==========================================================
// === REGISTER CUSTOM POST TYPES
//==========================================================
function register_team() {

    $labels = array( 
        'name' => __( 'Team Members', 'mystique' ),
        'singular_name' => __( 'Team Member', 'mystique' ),
        'add_new' => __( 'Add New', 'mystique' ),
        'add_new_item' => __( 'Add New Team Member', 'mystique' ),
        'edit_item' => __( 'Edit Team Member', 'mystique' ),
        'new_item' => __( 'New Team Member', 'mystique' ),
        'view_item' => __( 'View Team Member', 'mystique' ),
        'search_items' => __( 'Search Team Members', 'mystique' ),
        'not_found' => __( 'No Team Members found', 'mystique' ),
        'not_found_in_trash' => __( 'No Team Members found in Trash', 'mystique' ),
        'parent_item_colon' => __( 'Parent Team Member:', 'mystique' ),
        'menu_name' => __( 'Team Members', 'mystique' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Team Member entries for the Theme.', 'mystique'),
        'supports' => array( 'title', 'thumbnail', 'editor' ),
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'team' ),
        'capability_type' => 'post'
    );

    register_post_type( 'team', $args );
}

function create_team_taxonomies(){
    
    $labels = array(
        'name' => __( 'Team Categories','mystique' ),
        'singular_name' => __( 'Team Category','mystique' ),
        'search_items' =>  __( 'Search Team Categories','mystique' ),
        'all_items' => __( 'All Team Categories','mystique' ),
        'parent_item' => __( 'Parent Team Category','mystique' ),
        'parent_item_colon' => __( 'Parent Team Category:','mystique' ),
        'edit_item' => __( 'Edit Team Category','mystique' ), 
        'update_item' => __( 'Update Team Category','mystique' ),
        'add_new_item' => __( 'Add New Team Category','mystique' ),
        'new_item_name' => __( 'New Team Category Name','mystique' ),
        'menu_name' => __( 'Team Categories','mystique' ),
    ); 
        
    register_taxonomy('team-category', array('team'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true,
    ));
  
}

function register_client() {

//HERE'S AN ARRAY OF LABELS FOR CLIENT
    $labels = array( 
        'name' => __( 'Clients', 'mystique' ),
        'singular_name' => __( 'Client', 'mystique' ),
        'add_new' => __( 'Add New', 'mystique' ),
        'add_new_item' => __( 'Add New Client', 'mystique' ),
        'edit_item' => __( 'Edit Client', 'mystique' ),
        'new_item' => __( 'New Client', 'mystique' ),
        'view_item' => __( 'View Client', 'mystique' ),
        'search_items' => __( 'Search Clients', 'mystique' ),
        'not_found' => __( 'No Clients found', 'mystique' ),
        'not_found_in_trash' => __( 'No Clients found in Trash', 'mystique' ),
        'parent_item_colon' => __( 'Parent Client:', 'mystique' ),
        'menu_name' => __( 'Clients', 'mystique' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Client entries for the EL Theme.', 'mystique'),
        'supports' => array( 'title', 'thumbnail' ),
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'client', $args );
}

function create_client_taxonomies(){
    
    $labels = array(
        'name' => __( 'Client Categories','mystique' ),
        'singular_name' => __( 'Client Category','mystique' ),
        'search_items' =>  __( 'Search Client Categories','mystique' ),
        'all_items' => __( 'All Client Categories','mystique' ),
        'parent_item' => __( 'Parent Client Category','mystique' ),
        'parent_item_colon' => __( 'Parent Client Category:','mystique' ),
        'edit_item' => __( 'Edit Client Category','mystique' ), 
        'update_item' => __( 'Update Client Category','mystique' ),
        'add_new_item' => __( 'Add New Client Category','mystique' ),
        'new_item_name' => __( 'New Client Category Name','mystique' ),
        'menu_name' => __( 'Client Categories','mystique' ),
    ); 
        
    register_taxonomy('client-category', array('client'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true,
    ));
  
}

function register_portfolio() {
    
    $labels = array( 
        'name' => __( 'Portfolio', 'mystique' ),
        'singular_name' => __( 'Portfolio', 'mystique' ),
        'add_new' => __( 'Add New', 'mystique' ),
        'add_new_item' => __( 'Add New Portfolio', 'mystique' ),
        'edit_item' => __( 'Edit Portfolio', 'mystique' ),
        'new_item' => __( 'New Portfolio', 'mystique' ),
        'view_item' => __( 'View Portfolio', 'mystique' ),
        'search_items' => __( 'Search Portfolios', 'mystique' ),
        'not_found' => __( 'No portfolios found', 'mystique' ),
        'not_found_in_trash' => __( 'No portfolios found in Trash', 'mystique' ),
        'parent_item_colon' => __( 'Parent Portfolio:', 'mystique' ),
        'menu_name' => __( 'Portfolio', 'mystique' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Portfolio entries for the Theme.', 'mystique'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'comments'),
        'taxonomies' => array( 'portfolio-category', 'post_tag'  ),
        'public' => true,
        'menu_icon' => 'dashicons-camera',
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'portfolio' ),
        'capability_type' => 'post'
    );

    register_post_type( 'portfolio', $args );
}

function create_portfolio_taxonomies(){
    $labels = array(
        'name' => __( 'Portfolio Categories','mystique' ),
        'singular_name' => __( 'Portfolio Category','mystique' ),
        'search_items' =>  __( 'Search Portfolio Categories','mystique' ),
        'all_items' => __( 'All Portfolio Categories','mystique' ),
        'parent_item' => __( 'Parent Portfolio Category','mystique' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:','mystique' ),
        'edit_item' => __( 'Edit Portfolio Category','mystique' ), 
        'update_item' => __( 'Update Portfolio Category','mystique' ),
        'add_new_item' => __( 'Add New Portfolio Category','mystique' ),
        'new_item_name' => __( 'New Portfolio Category Name','mystique' ),
        'menu_name' => __( 'Portfolio Categories','mystique' ),
      );    
        
      register_taxonomy('portfolio-category', array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true,
      ));
}

function register_template_post_type() {
	
	if(!post_type_exists('template')) {
	
		$template_args = array(
			'labels' => array(
				'name' => 'Templates',
			),
			'public' => false,
			'show_ui' => false,
			'capability_type' => 'page',
			'hierarchical' => false,
			'rewrite' => false,
			'supports' => array( 'title', 'editor' ), 
			'query_var' => false,
			'can_export' => true,
			'show_in_nav_menus' => false
		);
		
		register_post_type( 'template', $template_args);
		
	} else {
		//add_action('admin_notices', create_function('', "echo '<div id=\"message\" class=\"error\"><p><strong>Aqua Page Builder notice: </strong>'. __('The \"template\" post type already exists, possibly added by the theme or other plugins. Please consult with theme author to consult with this issue', 'framework') .'</p></div>';"));
	}
	
}

function register_testimonials_post_type() {
    $labels = array( 
        'name' => __( 'Testimonials', 'ebor' ),
        'singular_name' => __( 'Testimonial', 'ebor' ),
        'add_new' => __( 'Add New', 'ebor' ),
        'add_new_item' => __( 'Add New Testimonial', 'ebor' ),
        'edit_item' => __( 'Edit Testimonial', 'ebor' ),
        'new_item' => __( 'New Testimonial', 'ebor' ),
        'view_item' => __( 'View Testimonial', 'ebor' ),
        'search_items' => __( 'Search Testimonials', 'ebor' ),
        'not_found' => __( 'No Testimonials found', 'ebor' ),
        'not_found_in_trash' => __( 'No Testimonials found in Trash', 'ebor' ),
        'parent_item_colon' => __( 'Parent Testimonial:', 'ebor' ),
        'menu_name' => __( 'Testimonials', 'ebor' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Testimonial entries.', 'ebor'),
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-quote',
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'testimonial', $args );
}
function create_testimonial_taxonomies(){
    
    $labels = array(
        'name' => _x( 'Testimonial Categories','ebor' ),
        'singular_name' => _x( 'Testimonial Category','ebor' ),
        'search_items' =>  __( 'Search Testimonial Categories','ebor' ),
        'all_items' => __( 'All Testimonial Categories','ebor' ),
        'parent_item' => __( 'Parent Testimonial Category','ebor' ),
        'parent_item_colon' => __( 'Parent Testimonial Category:','ebor' ),
        'edit_item' => __( 'Edit Testimonial Category','ebor' ), 
        'update_item' => __( 'Update Testimonial Category','ebor' ),
        'add_new_item' => __( 'Add New Testimonial Category','ebor' ),
        'new_item_name' => __( 'New Testimonial Category Name','ebor' ),
        'menu_name' => __( 'Testimonial Categories','ebor' ),
    ); 
        
    register_taxonomy('testimonial_category', array('testimonial'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true,
    ));
  
}