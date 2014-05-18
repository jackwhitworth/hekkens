<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<main>
		
		<header>
			
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			
			</a>
		
			<nav role="navigation">
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-navigation' ) ); ?>
				
			</nav>

			<div class="search">
				
				<?php get_search_form(); ?>

			</div>	
		
		</header><!-- #masthead -->

		
