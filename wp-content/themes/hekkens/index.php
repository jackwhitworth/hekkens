<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<article class="row">

	<?php

		// query custom post type : hekkens_work with arguements

		$args = array(
    		'post_type' => 'hekkens_work',
    		'posts_per_page' => 5,
		);

		$loop = new WP_Query($args);

		$class;
		$count = 0;

		while($loop->have_posts()): $loop->the_post();

		$count++;

		if ( $count === 1 ) {
			$class = "col-sm-12";
		} else {
			$class = "col-sm-6";
		}
	?>

		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="<?php echo $class; ?>" >
            <figure>
                <?php the_post_thumbnail('medium'); ?>
                <figcaption>
                    <h1 class="overlay-header-feature"><?php the_title(); echo $count; ?></h1>
                </figcaption>
            </figure>
        </a>
		
	<?php

		endwhile;

		wp_reset_query();

		// query custom post type : hekkens_development with arguements

		$args = array(
    		'post_type' => 'hekkens_development',
    		'posts_per_page' => 2,

		);

		$loop = new WP_Query($args);

		while($loop->have_posts()): $loop->the_post();

	?>

		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="<?php echo $class; ?>" >
            <figure>
                <?php the_post_thumbnail('medium'); ?>
                <figcaption>
                    <h1 class="overlay-header-feature"><?php the_title(); ?></h1>
                </figcaption>
            </figure>
        </a>
		
	<?php

		endwhile;

		wp_reset_query();
	
	?>

	


</article>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>