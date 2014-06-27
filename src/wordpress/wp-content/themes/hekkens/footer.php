<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the section elements
 *
 * @package Wednesday
 * @subpackage Ralph_Rucci
 * @since Ralph Rucci 1.0
 */
?>
		<footer class="container-fluid">
			<div class="row">
				<span class="impressum">&copy; ralph rucci 2014</span>
				<div class="follow-us">
					<span>follow us</span>
					<a class="facebook" title="Follow on Facebook" target="_blank" href="https://www.facebook.com/ralph.rucci"></a>
					<a class="twitter" title="Follow on Twitter" target="_blank" href="https://twitter.com/MrRalphRucci"></a>
					<a class="instagram" title="Follow on Instagram" target="_blank" href="http://instagram.com/ralphrucci"></a>
				</div>
				<a class="contact" data-fancybox-type="ajax" href="/contact">contact</a>
				<button id="backtotop">^</button>
			</div>
		</footer>
		<?php wp_footer(); ?>
		
		<!-- bower:js -->
		<!-- endbower -->

		<!-- addthis -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5396d1c81f18ae2e"></script>
		
		<!-- google analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51902967-1', 'ralphrucci.com');
		  ga('send', 'pageview');
		</script>
	</body>
</html>