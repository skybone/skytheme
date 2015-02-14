<?php 

$theme_path		= get_stylesheet_directory_uri();

	/*
	************************************************************************ 

	// Theme Customizer 

	************************************************************************ 
	 */
	

	// Add a customize link under appearance
	add_action ('admin_menu', 'themedemo_admin');
	function themedemo_admin() {
		// add the Customize link to the admin menu
		add_theme_page( 'Customize', 'edit_theme_options', 'customize.php' );
	}
	
	add_action('customize_register', 'framework_customize');
	function framework_customize($wp_customize) {
		
				// ## - Section for homepage ID 
		$wp_customize->add_section( 'site_options', array(
			'title'		=> 'Site Options',
			'priority'		=> 2,
		));

			// ## - Option for homepage ID 
			$wp_customize->add_setting( 'homepage_id', array(
				'default'	=> '',
			));

				// ## - Control for homepage ID 
				$wp_customize->add_control( 'homepage_id', array(
					'label'	=> 'Homepage ID',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));


			// ## - Option for twitter address 
			$wp_customize->add_setting( 'twitter_url', array(
				'default'	=> '',
			));

				// ## - Control for facebook address 
				$wp_customize->add_control( 'twitter_url', array(
					'label'	=> 'Twitter URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				

			// ## - Option for twitter address 
			$wp_customize->add_setting( 'facebook_url', array(
				'default'	=> '',
			));

				// ## - Control for facebook address 
				$wp_customize->add_control( 'facebook_url', array(
					'label'	=> 'Facebook URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				
			// ## - Option for linkedin address 
			$wp_customize->add_setting( 'linkedin_url', array(
				'default'	=> '',
			));

				// ## - Control for linkedin address 
				$wp_customize->add_control( 'linkedin_url', array(
					'label'	=> 'Linkedin URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				
			// ## - Option for googleplus address 
			$wp_customize->add_setting( 'googleplus_url', array(
				'default'	=> '',
			));

				// ## - Control for googeplus address 
				$wp_customize->add_control( 'googleplus_url', array(
					'label'	=> 'GooglePlus URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				
			// ## - Option for YouTube address 
			$wp_customize->add_setting( 'youtube_url', array(
				'default'	=> '',
			));

				// ## - Control for feed address 
				$wp_customize->add_control( 'youtube_url', array(
					'label'	=> 'YouTube URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));

			// ## - Option for Pinterest address 
			$wp_customize->add_setting( 'pinterest_url', array(
				'default'	=> '',
			));

				// ## - Control for feed address 
				$wp_customize->add_control( 'pinterest_url', array(
					'label'	=> 'Pinterest URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));

			// ## - Option for Instagram address 
			$wp_customize->add_setting( 'instagram_url', array(
				'default'	=> '',
			));

				// ## - Control for feed address 
				$wp_customize->add_control( 'instagram_url', array(
					'label'	=> 'Instagram URL',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				
			// ## - Option for email address 
			$wp_customize->add_setting( 'email_address', array(
				'default'	=> '',
			));

				// ## - Control for email address 
				$wp_customize->add_control( 'email_address', array(
					'label'	=> 'Email Address',
					'section'	=> 'site_options',
					'type'	=> 'text',
				));
				

	
	}


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
		 			'label' => 'Project',
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




?>