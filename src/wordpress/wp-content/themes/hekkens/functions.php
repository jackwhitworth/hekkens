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
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'post-formats' ),
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
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'post-formats' ),
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
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'post-formats' ),
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
	                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'post-formats'),
	                'rewrite' => array('slug' => 'development')
			)
		);
	    
	}

	// Gallery override
	add_shortcode('gallery', 'my_gallery_shortcode'); 

	function my_gallery_shortcode($attr) {
	    $post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
	    // 'ids' is explicitly ordered, unless you specify otherwise.
	    if ( empty( $attr['orderby'] ) )
	        $attr['orderby'] = 'post__in';
	    $attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
	    return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
	    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
	    if ( !$attr['orderby'] )
	        unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
	    'order'      => 'ASC',
	    'orderby'    => 'menu_order ID',
	    'id'         => $post->ID,
	    'itemtag'    => 'dl',
	    'icontag'    => 'dt',
	    'captiontag' => 'dd',
	    'columns'    => 3,
	    'size'       => 'full',
	    'include'    => '',
	    'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
	    $orderby = 'none';

	if ( !empty($include) ) {
	    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

	    $attachments = array();
	    foreach ( $_attachments as $key => $val ) {
	        $attachments[$val->ID] = $_attachments[$key];
	    }
	} elseif ( !empty($exclude) ) {
	    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
	    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
	    return '';

	if ( is_feed() ) {
	    $output = "\n";
	    foreach ( $attachments as $att_id => $attachment )
	        $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
	    return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$icontag = tag_escape($icontag);
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) )
	    $itemtag = 'dl';
	if ( ! isset( $valid_tags[ $captiontag ] ) )
	    $captiontag = 'dd';
	if ( ! isset( $valid_tags[ $icontag ] ) )
	    $icontag = 'dt';

	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = $gallery_div = '';
	
	$size_class = sanitize_html_class( $size );
	$gallery_div = "<div id='carousel'>";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$imageUrl = wp_get_attachment_image_src( $id, $size, $icon );
	    // $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	    $link = "<div style=\"background-image: url('" . $imageUrl[0] . "');\" ></div>";

	    $output .= "<figure>";
	    $output .= "$link";
	    $output .= "</figure>";
	}

	return $output;
	}

	// Insert Hekkens.js into the footer
	function hekkens_scripts() {
		wp_enqueue_script('hekkens-script', get_theme_root_uri() .'/hekkens/js/hekkens.js', array(), '1.0.0', true);
	}

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

	// HOOKS
	add_action( 'after_setup_theme', 'register_post_format' );


	// JAVASCRIPTS
	add_action('wp_enqueue_scripts', 'hekkens_scripts');

?>