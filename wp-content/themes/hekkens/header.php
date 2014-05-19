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

					<li class="nav-link col-xs-1 col-xs-offset-3 ">
						<a href="/work" title="Work">Work</a>
					</li>

					<li class="nav-link col-xs-1">
						<a href="/development" title="Development">Development</a>
					</li>

					<li class="nav-home col-xs-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</li>

					<li class="nav-link col-xs-1">
						<a href="/about" title="About">About</a>
					</li>

					<li class="nav-link col-xs-1">
						<a href="/contact" title="Contact">Contact</a>
					</li>

				</ul>

			</nav>	
		
		</header><!-- #masthead -->

