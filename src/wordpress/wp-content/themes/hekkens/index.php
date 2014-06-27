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
		<!-- HOMEPAGE (index.php) -->
		<section id="homepage">
			<div class="container-fluid">
				<div class="row">
					<?php
						$pages = get_pages(
							array(
								'post_type' => 'page',
								'sort_column' => 'menu_order, post_title',
								'exclude' => '109'
							)
						);

						$colcount = 0;

						foreach ($pages as $page) {
							if ($page->post_parent == 0) {
								// var_dump($page);
								// echo("<br>");
								$colcount++;
								echo "\n<article class=\"col-xs-12 col-md-6\">\n";
								echo "<a href=\"", get_permalink($page->ID), "\">", get_the_post_thumbnail($page->ID, 'large', array('class' => '')), "<h2>", get_the_title($page->ID), "</h2>", "</a>\n";
								echo "</article>\n";
								if ($colcount == 2) {
									echo "\n<div class=\"clearfix visible-md visible-lg\"></div>\n";
									$colcount = 0;
								}
							}
						}
					?>
				</div>
			</div>
		</section>
		<!-- /HOMEPAGE -->
<?php
	get_footer();
?>