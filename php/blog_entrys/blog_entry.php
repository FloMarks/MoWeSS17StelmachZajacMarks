<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Name des Blogeintrags</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="blog_entry_style.css" type="text/css" rel="stylesheet">
    <link href="../navigation/navi.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav> <div class="container"> <!-- alles in container stellt das Navi in der Ausgangsform (Desktop Ansicht) dar.-->

        <nav> <!-- alles in nav legt die eigentliche Navigation fest.-->

    			<div id="nav_text">
    				<a href="https://www.google.de">Home</a>
    				<a href="https://www.google.de">Neueste</a>
    				<a href="https://www.google.de">Entdecken</a>
    				<a href="https://www.google.de">Info</a>

            <div class="login-buttons-nav">
    					<a href="file:///D:/MoWeSS17StelmachZajacMarks/login/login.html">Registrieren</a>
    					<a href="file:///D:/MoWeSS17StelmachZajacMarks/login/login.html">Login</a>
    				</div>

    			</div>

          <img class="logo" src="../navigation/blue-pencil-horizontal-hi.png" title="Startseite">
    			<input class="search-input" placeholder="Suche" name="search-home" autocomplete="off">
        </nav>
      </div>
      </nav>
      <form> </form>
    </header>

      <?php
            
            $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
            $sql = "SELECT * FROM blog_entry WHERE title='sd'";
      
            foreach ($pdo->query($sql) as $row);
      ?>
      
	<div class = "opening-picture">
        <h1 value="<?php echo $row['title'] ;?>"></h1>
  </div>

  <div class = "blog-info">
    <p>Erstellt von: flo_marks</p>
    <p>Datum: 17.08.2017</p>
  </div>

  <div class = "blog-content">
    <p>
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
  </div>
  

  <!--<input id="pac-input" class="controls" type="text"
      placeholder="Enter a location">-->
  <div id="map"></div>
  <div id="infowindow-content">
    <span id="place-name"  class="title"></span><br>
    Place ID <span id="place-id"></span><br>
    <span id="place-address"></span>
  </div>

  <footer>
        <span class="copyright">Bleistift-Reisen © 2017</span>
        <div class="madefor">Gemacht mit 💚 für Euch Entdecker</div>
  </footer>

  <script src = "map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoHIww69uVIXblRNsiIwOh3A1oAtPJIwI&libraries=places&callback=initMap"
      async defer></script>
  </body>

</html>
