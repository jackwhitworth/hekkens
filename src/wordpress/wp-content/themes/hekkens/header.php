<?php
/**
 * The Header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Wednesday
 * @subpackage Ralph_Rucci
 * @since Ralph Rucci 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<meta name="google-site-verification" content="mYa8qtNTijSNYCJJKugFgOgalqlltu3PGOzTJ0upMl4" />
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/1bf80fed-0ec6-4f8f-a35f-2d692908a4cd.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php
			// load jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-2.1.1.min.js", false, null);
			wp_enqueue_script('jquery');

			wp_head();
		?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	</head>
	<body class="">
		<header>
			<div class="header">
				<div class="container-fluid">
					<nav class="row clearfix">
						<button type="button" class="navbar-toggle" data-action="toggle" data-target="navbar" title="Toggle the navigation menu">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
						<div class="identity">
						<?php if ( get_theme_mod( 'ralphrucci_logo' ) ) : ?>
						    <div class='site-logo'>
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						        	<!-- <img src='<?php echo esc_url( get_theme_mod( 'ralphrucci_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'> -->
						        </a>
						    </div>
						<?php else : ?>
						    <hgroup>
						        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
						        <!-- <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2> -->
						    </hgroup>
						<?php endif; ?>
						</div>
						<?php
							wp_nav_menu(
								array(
									'depth'			=> 0,
									'menu_class'	=> 'menu',
									'echo'			=> true,
									'link_before'	=> '',
									'link_after'	=> '',
									'walker'		=> new RalphRucci_Menu_Walker()
								)
							);
						?>
					</nav>
				</div>
			</div>
			<div id="collection-sub-nav">
				<ul></ul>
				<a href="/collection/archive">archive</a>
			</div>
		</header>
		