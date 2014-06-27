<?php
/*
Template Name: Contact
*/


	get_header();
?>
 	

	<section id="<?php echo basename(get_permalink()); ?>">

		<div class="container-fluid">

			<article>

				<div class="the-content row" itemscope itemtype="http://schema.org/Organization">
					
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
					?>
							<h1>contact</h1>
							<div itemprop="name" id="contact-identity"></div>
							<p class="address" itemprop="address"><?php echo get_post_meta( get_the_ID(), 'address', true ); ?></p>
							<p>Tel:<span itemprop="telephone"><?php echo get_post_meta( get_the_ID(), 'telephone', true ); ?></span></p>
							<p>Fax:<span itemprop="faxNumber"><?php echo get_post_meta( get_the_ID(), 'fax', true ); ?></span></p>
							<hr/>
							<a href="mailto:<?php echo get_post_meta( get_the_ID(), 'email1', true ); ?>"><span itemprop="email"><?php echo get_post_meta( get_the_ID(), 'email1', true ); ?></span></a>
							<br/>
							<a href="mailto:<?php echo get_post_meta( get_the_ID(), 'email2', true ); ?>"><span itemprop="email"><?php echo get_post_meta( get_the_ID(), 'email2', true ); ?></span></a>
					<?php
						endwhile;		
					?>

				</div>

			</article>

		</div>

	</section>

<?php
	get_footer();
?>
