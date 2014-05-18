<?php
// BOOT

function hekkens_setup() {
	
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'hekkens' ) );

}
add_action( 'after_setup_theme', 'hekkens_setup' );

// BACK END THEME FONTS 

function hekkens_fonts_url() {
	$fonts_url = '';
	
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'hekkens' );

	$bitter = _x( 'on', 'Bitter font: on or off', 'hekkens' );

	if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

// REGISTER WIDGETS 

function hekkens_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'hekkens' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'hekkens' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'hekkens' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'hekkens' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'hekkens_widgets_init' );

// POST NAVIGATION

if ( ! function_exists( 'hekkens_post_nav' ) ) :

function hekkens_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'hekkens' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'hekkens' ) ); ?>
	</nav><!-- .navigation -->
	<?php
}
endif;

// REGISTER CUSTOM POST TYPES 

add_action( 'after_setup_theme', 'register_post_format' ); 

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

//LOAD JAVASCRIPT
//
function enqueue_theme_scripts() 
{  

    wp_enqueue_script(
	    'jquery',
	    get_template_directory_uri() . '/js/jquery-2.1.1.min.js'
    );

    wp_enqueue_script(
	    'isotope',
	    get_template_directory_uri() . '/js/isotope.min.js',
	    array( 'jquery' ),
	    null,
	    true 
    );
    
}

add_action( 'after_setup_theme', 'enqueue_theme_scripts' );
