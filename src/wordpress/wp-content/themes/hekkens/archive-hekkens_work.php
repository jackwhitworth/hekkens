<?php
	get_header();
	$work = new WP_Query('post_type=hekkens_work&orderby=date&order=DESC');
?>

<!-- work -->
<section id="work" class="three">
	<div class="container-fluid">
		<div class="row">
			<div class="work-filter">
				<span>How many per row?</span>
				<div class="row-filter">
					<a class="one" href="one">1</a>
					<a class="two" href="two">2</a>
					<a class="three" href="three">3</a>
					<a class="four" href="four">4</a>
				</div>
				<div class="year-filter"></div>
				<div class="type-filter"></div>
			</div>

		<?php
			while ($work->have_posts()) : $work->the_post();
		?>

			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="project" >
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
<!-- /work -->
<?php
get_footer();