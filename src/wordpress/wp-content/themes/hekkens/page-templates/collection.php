<?php
/*
Template Name: Collection
*/
	get_header();
?>
	<!-- COLLECTION TEMPLATE (page-templates/collection.php) -->
	<section id="collection">
		<div class="container-fluid">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(1000,1000), false, '' );
			?>
			<article id="post-<?php the_ID(); ?>" class="row">
				<div>
					<h1><?php the_title(); ?></h1>
					<div class="background-image" style="background-image: url(' <?php echo $src[0];  ?>');"></div>
				</div>				
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