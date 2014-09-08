<!DOCTYPE HTML>
<html>
  <head>
    <title>Hekkens Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Portfolio / Blog For Web Developer Nicolay Hekkens" />
    <meta name="keywords" content="Nicolay Hekkens Development Ecommerce Frontend Backend" />
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.poptrox.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/scramble.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-540d6e8a1485b284"></script>

    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
    </noscript>
      <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body>
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
          <h1>Mulberry</h1>
          <p class="scramble">Interactive Quiz</p>
        </header>
        <footer>
          <a href="#slideshow" class="button style2 scrolly scrolly-centered">Show</a>
        </footer>
      </section>

    <!-- Banner -->
      <section id="slideshow" class="carousel">
        <div class="carousel-container">
          <div id="carousel">

            <figure><div style="background-image: url('images/cara-scope/1.jpg');"></div></figure>
            <figure><div style="background-image: url('images/cara-scope/2.jpg');"></div></figure>
            <figure><div style="background-image: url('images/cara-scope/3.jpg');"></div></figure>
            <figure><div style="background-image: url('images/cara-scope/4.jpg');"></div></figure>
            <figure><div style="background-image: url('images/cara-scope/5.jpg');"></div></figure>

          </div>
        </div>
      </section>
      <div class="nav-container">
        <button class="navigation fa fa-fast-backward" id="previous" data-increment="-1" title="Previous Slide"></button>
        <button class="navigation fa fa-fast-forward" id="next" data-increment="1" title="Next Slide"></button>
      </div>
    <!-- Generic -->

      <article class="container box style3">
        <section>
          <header>
            <a href="http://www.mulberry.com/caradelevingne" target="_blank"><h3>Mulberry, Cara Scope</h3></a>
          </header>
          <hr />
          <p>This project was an exciting process, it only took two weeks from prototype to production.
             It started as a prototype so there was quite a challenge keeping the code clean as the project grew. </p>
          <hr />
          <p>First challenge was to figure out how the slides would move, after some thinking I decided to use javascript
             to measure the window width and height. With those numbers I was able to set the dimensions of each
             slide and position the slide absolutely and use CSS3 transitions to animate slides. There were five
              questions which were either A or B, so there were 32 possible combinations. Depending on the combination
              the the relevant data was pulled from a JSON file and output.</p>
          <hr />
        </section>
        <section>
          <header>
            <h3>Technology Used</h3>
          </header>
          <ul class="default">
            <li>Html5</li>
            <li>Css3</li>
            <li>Javascript</li>
            <li>Scss</li>
            <li>Jquery</li>
            <li>VideoJS</li>
            <li>ShareThis</li>
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
      echo file_get_contents("navigation.html");
    ?>

  </body>
</html>
