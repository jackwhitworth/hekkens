<!DOCTYPE HTML>
<html>
	<head>
		<title>Code - Hekkens Development</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Portfolio / Blog For Web Developer Nicolay Hekkens" />
		<meta name="keywords" content="Code Nicolay Hekkens" />
		<link rel="icon" type="image/ico" href="favicon.ico">
		<link rel="stylesheet" href="css/main.css" />

		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/init.js"></script>
		<script src="js/scramble.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<!-- google analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-54558778-1', 'auto');
			ga('send', 'pageview');

		</script>

		<!-- Header -->
			<section id="header">
				<header>
					<h1 class="scramble">Code</h1>
				</header>
				<footer>
					<a href="#about" class="button style2 scrolly scrolly-centered">Continue</a>
				</footer>
			</section>

		<article id="about" class="container box style3">
			<section>
				<header>
					<h3>Code</h3>
				</header>
				<ul class="logos">

				</ul>
			</section>
		</article>

		<section id="footer">
			<ul class="icons">
				<li><a href="https://twitter.com/nhekkens" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/nhekkens" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="https://plus.google.com/u/1/111864068369153714833/posts/p/pub" target="_blank" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="https://www.linkedin.com/profile/view?id=88182737&authType=name&authToken=QlKl&locale=en_US&pvs=pp&trk=ppro_viewmore" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Hekkens. All rights reserved.</li>
				</ul>
			</div>
		</section>

		<!-- FOOTER AND NAV CONSTANT -->
		<?php
			echo file_get_contents("./navigation.html");
		?>


	</body>
</html>
