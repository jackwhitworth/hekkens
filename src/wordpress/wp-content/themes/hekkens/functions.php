<?php
	class RalphRucci_Menu_Walker extends Walker_Nav_Menu {

		function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {

			if ($item->post_parent != 0 ) {
				$item_parent_title = get_the_title($item->post_parent);
			} else {
				$item_parent_title = '';
			}
			
			
			if ($item_parent_title == "collection") {
				// echo "<pre>";
				// var_dump($item);
				// var_dump($args);
				// echo "rargh!" . get_the_post_thumbnail($item->object_id, 'thumbnail');
				// echo "</pre>";

			    // global $wp_query;
			    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

			    // depth dependent classes
			    $depth_classes = array(
			        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			        'menu-item-depth-' . $depth
			    );
			    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

			    // passed classes
			    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
			    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

			    // build html
			    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

			    // link attributes
			    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

			    // get the featured image
			    $thumbnail = get_the_post_thumbnail($item->object_id, 'full');

			    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s%6$s%7$s</a>',
			        $args->before,
			        $attributes,
			        $args->link_before,
			        $thumbnail,
			        '<span>',
			        apply_filters( 'the_title', $item->title, $item->ID ),
			        '</span>',
			        $args->link_after,
			        $args->after
			    );

			    // build html
			    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			} else {
				parent::start_el($output, $item, $depth, $args, $id);
			}
		}

		// function end_el( &$output, $item, $depth = 0, $args = array() ) {
		// 	parent::end_el($output, $item, $depth, $args);
		// }

		// function start_lvl( &$output, $depth = 0, $args = array() ) {}

		// function end_lvl( &$output, $depth = 0, $args = array() ) {}

	}

	// General Functions

	function str_extract($start="", $end="", $string) {
		$extract_start = strpos($string, $start);
		$result = substr($string, $extract_start, strlen($string));
		$extract_end = strpos($result, $end);
		if($extract_end === false){
			$extract_end = strlen($result);
		}
		return substr($result, 0, $extract_end + strlen($end));
	}

	function str_delete($start="", $end="", $string) {
		$start_delete = strpos($string, $start);
		$end_delete = strpos($string, $end, $start_delete) + strlen($end);
		if ($start_delete === false || $end_delete === false) {
			return $string;
		} else {
			return substr($string, 0, $start_delete) . substr($string, $end_delete, strlen($string));
		}
	}


	// Theme Specific Functions

	function ralphrucci_theme_customizer($wp_customize) {
		// Logo upload
		$wp_customize->add_section(
			'ralphrucci_logo_section' ,
			array(
				'title' => __( 'Logo', 'ralphrucci' ),
				'priority' => 30,
				'description' => 'Upload a logo to replace the default site name and description in the header',
			)
		);

		$wp_customize->add_setting(
			'ralphrucci_logo',
			array(
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'ralphrucci_logo',
				array(
					'label' => __( 'Logo', 'ralphrucci' ),
					'section' => 'ralphrucci_logo_section',
					'settings' => 'ralphrucci_logo',
				)
			)
		);
	}

	function ralphrucci_remove_image_sizes($html) {
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
	}

	function ralphrucci_scripts() {
		wp_enqueue_script('ralphrucci-script', get_theme_root_uri() .'/ralphrucci/js/ralphrucci.js', array(), '1.0.0', true);
	}


	function ralphrucci_registermenus() {
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu' )
			)
		);
	}

	// HOOKS

	// Registering menus for theme
	add_action('init', 'ralphrucci_registermenus');

	// add logo upload to theme customiser
	add_action('customize_register', 'ralphrucci_theme_customizer');
	// add featured image support for pages
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	// OTHER MISCELLANEOUS FILTERS

	// remove image attributes from generated image tags
	add_filter( 'post_thumbnail_html', 'ralphrucci_remove_image_sizes', 10 );
	add_filter( 'image_send_to_editor', 'ralphrucci_remove_image_sizes', 10 );
	add_filter( 'wp_get_attachment_link', 'ralphrucci_remove_image_sizes', 10, 1 );
	add_filter( 'the_content', 'ralphrucci_remove_image_sizes', 10 );

	// JAVASCRIPTS
	add_action('wp_enqueue_scripts', 'ralphrucci_scripts');

?>