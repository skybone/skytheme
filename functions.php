<?php 

	$theme_path		= get_stylesheet_directory_uri();
	add_theme_support( 'post-thumbnails' );

	/*
	************************************************************************ 

	// Theme Customizer 

	************************************************************************ 
	 */



	function skylyy_post_types() {
		
		register_post_type('homepage', array(
		'label' => 'Homepages',
		 			'description' => '',
		 			'public' => true,
		 			'show_ui' => true,
		 			'show_in_menu' => true,
		 			'capability_type' => 'post',
		 			'hierarchical' => true,
		 			'menu_position' => 2,
		 			'rewrite' => false,
		 				'labels' => array (
							  'name' => 'Homepages',
							  'singular_name' => 'Homepage',
							  'menu_name' => 'Homepage',
							  'edit' => 'Edit',
							  'edit_item' => 'Edit Homepage',
							  'new_item' => 'New Homepage',
							  'view' => 'View Homepage',
							  'view_item' => 'View Homepage',
							  'search_items' => 'Search Homepage',
							  'supports' => array('title','editor','author','excerpt','comments','revisions','thumbnail'),
							  'not_found' => 'No Homepages Found',
							  'not_found_in_trash' => 'No Homepages Found in Trash',
							  'parent' => 'Parent Homepage',
						),

		    ));

		 register_post_type('project', array(	
		 			'label' => 'Projects',
		 			'description' => '',
		 			'public' => true,
		 			'show_ui' => true,
		 			'show_in_menu' => true,
		 			'capability_type' => 'post',
		 			'hierarchical' => true,
		 			'rewrite' => array(
		 				'slug'=>'Project','with_front'=>false),'query_var' => true,'has_archive' => true,'menu_position' => 3,
		 				'supports' => array('title','editor','author','excerpt','comments','revisions', 'thumbnail'),
		 				'can_export' => true,
		 				'labels' => array (
							  'name' => 'Project',
							  'singular_name' => 'project',
							  'menu_name' => 'Project',
							  'add_new' => 'Add project',
							  'add_new_item' => 'Add New project',
							  'edit' => 'Edit',
							  'edit_item' => 'Edit project',
							  'new_item' => 'New project',
							  'view' => 'View project',
							  'view_item' => 'View project',
							  'search_items' => 'Search project',
							  'supports' => array('title','editor','author','excerpt','comments','revisions','thumbnail'),
							  'not_found' => 'No Project Found',
							  'not_found_in_trash' => 'No Project Found in Trash',
							  'parent' => 'Parent project',
						),

		    ));

		flush_rewrite_rules( false );

		}

		add_action('init', 'skylyy_post_types');

		add_filter( "the_excerpt", "add_class_to_excerpt" );

		function add_class_to_excerpt( $excerpt ) {
		    return str_replace('<p', '<p class="lead"', $excerpt);
		}


?>