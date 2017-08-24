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
    <link href="../navigation/navi_style.css" type="text/css" rel="stylesheet">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="../navigation/navi_code.js"></script>
  </head>
 
   <!--NAVIGATION--> 
    <?php include("../navigation/navi.php");?>
    
<body>

      <?php
            //write mysql data in html fields
            $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
            $sql = "SELECT * from blog_entry ORDER BY blog_entry_id DESC LIMIT 1";
      
            foreach ($pdo->query($sql) as $row);
      ?>
      
      
	<div class = "opening-picture">
        <h1><?php echo $row['title'] ;?></h1>
  </div>

  <div class = "blog-info">
    <p>Nutzer: <?php echo $row['user_name'];?></p>
    <p>Ort: <?php echo $row['place'] ;?></p>
    <p>Datum: <?php echo $row['date'] ;?></p>
  </div>

  <div class = "blog-content">
    <p>
     <?php echo $row['content'] ;?>
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
