<!DOCTYPE HTML>
<html>
  <head>
    <title>Hekkens Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Portfolio / Blog For Web Developer Nicolay Hekkens" />
    <meta name="keywords" content="" />
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

    <!-- Header -->
      <section id="header">
        <header>
          <h1 class="scramble">Nicolay Hekkens</h1>
        </header>
        <footer>
          <a href="#nicolay" class="button style2 scrolly scrolly-centered">About me</a>
        </footer>
      </section>

    <article id="about" class="container box style3">
      <section>
        <img id="nicolay" class="center" src="images/nicolay.jpg" alt="Nicolay Hekkens" />
        <hr />
        <p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
        ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
        facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
        tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia.</p>
        <hr />
        <p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
        ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
        facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
        tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia.</p>
        <hr />
      </section>
      <section>
        <header>
          <h3>Technology Used</h3>
        </header>
        <ul class="default">
          <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
          <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
          <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
          <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
        </ul>
      </section>
    </article>

    <!-- FOOTER AND NAV CONSTANT -->
    <?php
      echo file_get_contents("footer.html");
    ?>


  </body>
</html>
