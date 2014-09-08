<?php
/**
 * Template used for displaying page content
 *
 * @package Wednesday
 * @subpackage Ralph_Rucci
 * @since Ralph Rucci 1.0
 */
?>

<article <?php post_class('row'); ?>>
	<h1><?php the_title(); ?></h1>
	<div class="the-content">
		<?php the_content(); ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->