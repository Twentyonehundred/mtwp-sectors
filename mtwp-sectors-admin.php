<?php

/*
Plugin Name: MTWP-Sector
Plugin URI: http://www.minttwist.com/mtwp/careers
Description: Sector section for new MintTwist sites, used with MTWP theme.
Author: CS
Version: 0.1
Author URI: http://www.minttwist.com/meet-the-team
*/

/**
 * Create the sectors post type
**/
function create_sectors_post_type() {

	$labels = array(
			'name'               	=> 'Sectors',
			'singular_name'      	=> 'Sector',
			'menu_name'          	=> 'Sectors',
			'name_admin_bar'     	=> 'Sectors',
			'add_new'            	=> 'Add New',
			'add_new_item'       	=> 'Add New Sector',
			'new_item'           	=> 'New Sector',
			'edit_item'         	=> 'Edit Sector',
			'view_item'          	=> 'View Sector',
			'all_items'          	=> 'All Sectors',
			'search_items'       	=> 'Search Sectors',
			'parent_item_colon'  	=> 'Parent Sector:',
			'not_found'				=> 'No Sectors found.',
			'not_found_in_trash'	=> 'No Sectors found in Trash.'
	);

	$args = array(
		'public' 	=> true,
		'labels'	=> $labels,
		'show_ui'	=> true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-list-view',
		'supports'	=> array('title', 'editor', 'thumbnail', 'excerpt'),
		'capability_type' => 'post',
		'hierarchical' => true,
		'map_meta_cap' => true,
		'rewrite' => array('slug' => 'sectors')
	);

	register_post_type( 'sector', $args );
}

add_action( 'init', 'create_sectors_post_type', 14 );