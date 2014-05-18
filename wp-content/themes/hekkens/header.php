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

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

</head>

<body <?php body_class(); ?>>
	
	<main>
		
		<header class="row">
			
			<nav>

				<ul>

					<li class="menu-item">
						<a href="/work">Work</a>
					</li>

					<li class="menu-item">
						<a href="/development">Development</a>
					</li>

					<li class="menu-item">
						<a class="col-md-4 home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						</a>
					</li>

					<li class="menu-item">
						<a href="/about">About</a>
					</li>

					<li class="menu-item">
						<a href="/contact">Contact</a>
					</li>
					
				</ul>

			</nav>	
		
		</header><!-- #masthead -->

