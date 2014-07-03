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
	$work = new WP_Query('post_type=hekkens_work&posts_per_page=4&orderby=date&order=DESC');
?>

<!-- HOMEPAGE (index.php) -->
<section id="homepage">
	<div class="container-fluid">
		<div class="row">

		<?php
			while ($work->have_posts()) : $work->the_post();

		?>

			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="featured" >
				<?php the_post_thumbnail( 'full' ); ?>
				<div class="info">
					<p class="title"><?php the_field('featured_text_one'); ?></p>
					<p class="excerpt"><?php the_field('featured_text_two'); ?></p>
				</div>
			</a> 
		
		<?php
			endwhile;
		?>
		
		</div>
	</div>
</section>
<!-- /HOMEPAGE -->
<?php
get_footer();
?>