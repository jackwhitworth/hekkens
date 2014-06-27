<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wednesday
 * @subpackage Ralph_Rucci
 * @since Ralph Rucci 1.0
 */

	get_header();
?>
 	

	<!-- GENERAL PAGE TEMPLATE (page.php) -->

	<section id="<?php echo basename(get_permalink()); ?>">

		<div class="container-fluid">

			<?php

				// Start the Loop.
				while ( have_posts() ) : the_post();
					

					get_template_part( 'page-templates/content', 'page' );
				
					
				endwhile;
			
			?>
				
		</div>

	</section>
	<!-- adds a laod more button for social OR press pages -->
	<?php 
		if (basename(get_permalink()) === "press")
			// echo 
			// '<div class="load-more">
			// 	<button id="press-more" class="btn btn-default" type="button">load more</button>
			// </div>';
	?>


	<!-- /GENERAL PAGE TEMPLATE -->
<?php

	get_footer();

?>