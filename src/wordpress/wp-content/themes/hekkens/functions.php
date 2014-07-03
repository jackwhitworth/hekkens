<?php

	

	// Register custom post types.
	function register_post_format() {
	    add_theme_support( 'post-formats', array( 'quote', 'gallery' ) );
	}

	add_action( 'init', 'create_post_type' );
	function create_post_type() {

		register_post_type( 'hekkens_work',
			array(
				'labels' => array(
	                                
					'name' => __( 'Work' ),
					'singular_name' => __( 'Work' )
				),
			'public' => true,
			'has_archive' => true,
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	                'rewrite' => array('slug' => 'work')
			)
		);

		register_post_type( 'hekkens_about',
			array(
				'labels' => array(
	                                
					'name' => __( 'About' ),
					'singular_name' => __( 'About' )
				),
			'public' => true,
			'has_archive' => true,
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	                'rewrite' => array('slug' => 'about')
			)
		);

		register_post_type( 'hekkens_contact',
			array(
				'labels' => array(
	                                
					'name' => __( 'Contact' ),
					'singular_name' => __( 'Contact' )
				),
			'public' => true,
			'has_archive' => true,
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	                'rewrite' => array('slug' => 'contact')
			)
		);

		register_post_type( 'hekkens_development',
			array(
				'labels' => array(
	                                
					'name' => __( 'Development' ),
					'singular_name' => __( 'Development' )
				),
			'public' => true,
			'has_archive' => true,
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	                'rewrite' => array('slug' => 'development')
			)
		);
	    
	}

	// Insert Hekkens.js into the footer
	function hekkens_scripts() {
		wp_enqueue_script('hekkens-script', get_theme_root_uri() .'/hekkens/js/hekkens.js', array(), '1.0.0', true);
	}

	add_theme_support('post-thumbnails');
	
	// HOOKS
	add_action( 'after_setup_theme', 'register_post_format' );


	// JAVASCRIPTS
	add_action('wp_enqueue_scripts', 'hekkens_scripts');

?>