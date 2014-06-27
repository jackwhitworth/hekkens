<?php
/*
Template Name: Archive
*/
	get_header();
?>
	<!-- COLLECTION TEMPLATE (page-templates/collection.php) -->
	<section id="collection">
		<div class="container-fluid">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" class="row">
				<?php the_content(); ?>
			</article>
			<?php
				endwhile;
			?>
		</div>
	</section>
	<!-- /COLLECTION TEMPLATE -->
<?php
	get_footer();
?>