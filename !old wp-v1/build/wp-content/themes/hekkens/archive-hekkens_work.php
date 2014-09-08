<?php
	get_header();
	$work = new WP_Query('post_type=hekkens_work&orderby=date&order=DESC');
?>

<!-- work -->
<section id="work-archive" class="three">
	<div class="container-fluid">

		<div class="row filter">
			<h1>Work</h1>

			<h2>Filter:</h2>



			<!-- Row buttons -->
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Rows? &nbsp; <span class="caret"></span>
				</button>
				<ul class="dropdown-menu row-filter" role="menu">
					<li><button class="btn-link" href="one">1</button></li>
					<li><button class="btn-link" href="two">2</button></li>
					<li><button class="btn-link" href="three">3</button></li>
					<li><button class="btn-link" href="four">4</button></li>
				</ul>
			</div>

			<!-- Year buttons -->
			<div class="btn-group">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					Build Type? &nbsp; <span class="caret"></span>
				</button>
				<ul class="dropdown-menu filter-group" role="menu" data-filter-group="type">
					<li><button class="btn-link" data-filter="">any</button></li>
					<li><button class="btn-link" data-filter=".wordpress">Wordpress</button></li>
					<li><button class="btn-link" data-filter=".e-commerce">E-Commerce</button></li>
				</ul>
			</div>

			<!-- Client buttons -->
			<div class="btn-group">
				<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
					Client? &nbsp; <span class="caret"></span>
				</button>
				<ul class="dropdown-menu filter-group" role="menu" data-filter-group="client">
					<li><button class="btn-link" data-filter="">any</button>
					<li><button class="btn-link" data-filter=".erdem">Erdem</button>
					<li><button class="btn-link" data-filter=".calvin-klein">Calvin Klein</button>
				</ul>
			</div>

			<!-- Year buttons -->
			<div class="btn-group">
				<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
					Year? &nbsp; <span class="caret"></span>
				</button>
				<ul class="dropdown-menu filter-group" role="menu" data-filter-group="year">
					<li><button class="btn-link" data-filter="">any</button></li>
					<li><button class="btn-link" data-filter=".2012">2012</button></li>
					<li><button class="btn-link" data-filter=".2013">2013</button></li>
					<li><button class="btn-link" data-filter=".2014">2014</button></li>
				</ul>
			</div>

			<p><input type="text" id="quicksearch" placeholder="Search" /></p>

		</div>

		<div class="row isotope-container">
		<?php
			while ($work->have_posts()) : $work->the_post();
		?>

			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="project <?php the_field('work_filter'); ?>" >
				<?php the_post_thumbnail( 'full' ); ?>
				<div class="info">
					<p class="title"><?php the_field('featured_text_one'); ?></p>
					<p class="excerpt"><?php the_field('featured_text_two'); ?></p>
					<span class="invisible"><?php the_field('work_filter'); ?></span>
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