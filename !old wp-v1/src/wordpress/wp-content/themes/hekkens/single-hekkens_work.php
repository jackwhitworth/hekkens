<?php
/*
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hekkens
 * @subpackage Hekkens
 * @since Hekkens 1.0
 */

	get_header();
?>

<!-- Work post -->
<section id="work_post">
	<div class="container-fluid">

			<div class="carousel-container row">

				<button class="navigation glyphicon glyphicon-backward" id="previous" data-increment="-1"></button>
				<button class="navigation glyphicon glyphicon-forward" id="next" data-increment="1"></button>

				<?php echo get_post_gallery(); ?>

			</div>

			<!-- <div class="info row">
				<p class="title"><?php the_field('featured_text_one'); ?></p>
				<p class="excerpt"><?php the_field('featured_text_two'); ?></p>
			</div> -->

	</div>
</section>
<!-- /Work post -->
<?php
	get_footer();
?>
