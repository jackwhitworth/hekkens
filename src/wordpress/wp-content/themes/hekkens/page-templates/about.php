<?php
/*
Template Name: About
*/

	get_header();
?>
	<!-- ABOUT PAGE TEMPLATE (page-templates/about.php) -->
	<section id="about">
		<div class="container-fluid">
			<?php
				$content_query = null;
				$content_query = new WP_Query(
					array(
						'post_type' => 'about',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'ignore_sticky_posts'=> 1,
						'orderby' => 'date',
						'order' => 'ASC'
					)
				);

				if( $content_query->have_posts() ) {
					while ($content_query->have_posts()):
						$content_query->the_post();

						// get the css class name and apply a default if unset
						$layoutclass = get_post_meta(get_the_ID(), 'custom-layout', true);
						$layoutclass = $layoutclass != '' ? $layoutclass : 'custom-left';

						// split the gallery out of the content so that we can place it outside the layer
						$the_content = get_the_content();
						$gallery = str_extract("[gallery", "]", $the_content);
						$the_content = str_delete("[gallery", "]", $the_content);

			?>
				<article id="<?php echo basename(get_the_permalink()); ?>" class="row clearfix <?php echo $layoutclass; ?>">
					
					<div class="col-xs-12 col-sm-6 col-md-9 gallery-container">
						<div class="row">
							<?php echo apply_filters('the_content', $gallery); ?>
						</div>
					</div>
					
					<div class="the-content col-xs-12 col-sm-6 col-md-3">
						<h1><?php the_title(); ?></h1>
						<hr/>
						<?php echo apply_filters('the_content', $the_content); ?>
					</div>

				</article>
			<?php
					endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>
		</div>
	</section>
	<!-- /ABOUT PAGE TEMPLATE -->
<?php
	get_footer();
?>