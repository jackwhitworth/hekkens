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
		<title><?php bloginfo('name'); ?> | Development</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/edfdf469-f1a4-476f-9501-a03e66c149c6.css"/>
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
		<nav id="navigation" class="closed" style="display: none;">	
			<?php
				wp_nav_menu();
			?>
		</nav>
		<header>
			<div class="banner">
				<div class="menu-hekkens-container">
					<div class="menu-hekkens">
						<span class="menu-hekkens-global menu-hekkens-top"></span>
						<span class="menu-hekkens-global menu-hekkens-middle"></span>
						<span class="menu-hekkens-global menu-hekkens-bottom"></span>
					</div>
					<p class="menu-hekkens-text">MENU</p>
				</div>
				
			    <a class="site-title" href="<?php echo home_url(); ?>" title="home">
			    	HEKKENS
			    </a>
				
			</div>
		</header>