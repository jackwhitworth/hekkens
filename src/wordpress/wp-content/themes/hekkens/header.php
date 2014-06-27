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
	<body>
		<header>
			<div class="header">
				<div class="container-fluid">
					<nav class="row clearfix">	
						<?php
							wp_nav_menu(
								// array(
								// 	'depth'			=> 0,
								// 	'menu_class'	=> 'menu',
								// 	'echo'			=> true,
								// 	'link_before'	=> '',
								// 	'link_after'	=> '',
								// 	'walker'		=> new RalphRucci_Menu_Walker()
								// )
							);
						?>
					</nav>
				</div>
			</div>
		</header>
		