<!DOCTYPE HTML>
<html>
  <head>
    <title>Hekkens Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Portfolio For Web Developer Nicolay Hekkens" />
    <meta name="keywords" content="Nicolay Hekkens Development Ecommerce Frontend Backend" />
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
        <h1 class="scramble">CONTACT</h1>
      </header>

      <br />


      <a href="mailto:nicolayhekkens@gmail.com?subject=Contact Hekkens" class="button style2 scrolly scrolly-centered">Contact me</a>

    </section>

    <!-- FOOTER AND NAV CONSTANT -->
    <?php
      echo file_get_contents("navigation.html");
    ?>

  </body>
</html>
