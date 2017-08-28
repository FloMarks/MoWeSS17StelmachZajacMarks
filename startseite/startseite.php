<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Dein Reisetagebuch</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <link href="startseite_style.css" type="text/css" rel="stylesheet">
      <link href="../navigation/navi_style.css" type="text/css" rel="stylesheet">
      <script src="../navigation/navi_code.js"></script>
</head>

    <!--NAVIGATION-->
    <?php include("../navigation/navi.php");?>


  <body>
    <div class="wrapper-main">

        <div class="start-picture">
            <h1 id="welcome">Willkommen bei Pavel's</h1>
            <p id ="welcome-text">Halte unvergessliche Reisemomente fest und teile deine Abenteuer mit anderen Menschen. Lass dich von tausenden Storys aus der ganzen Welt beeindrucken und plane deinen Trip.</p>

            <div class = "search-main">
              <center>
                <input class="search-input-main" placeholder="z. B. Bangkok, Australien, Neuseeland" name="search-home" autocomplete="off">
              </center>
            </div>


        </div>

		<div class="main_text"><h2 id="main_text_ins">Gemacht für deine Erinnerungen und Abenteuer</h2>
		<h3 id="main_text_info">
		Mehr als 30.000 Reisende auf der ganzen Welt. Halte unvergessliche Reisemomente fest und teile deine
		Abenteuer mit anderen Menschen. Lass dich von tausenden Storys aus der ganzen
		Welt beeindrucken und plane deinen Trip</h3>

              <?php
                if(isset($_SESSION['user_id'])){
                     echo '<div class="login-buttons-main">
                    <a href="../blog_entrys/create_entry.php">Beitrag erstellen</a>
                    </div>';
                } else {
                    echo '<div class="login-buttons-main">
                    <a href="../login_system/login.php">Login</a>
                    <a href="../login_system/register.php">Registrieren</a>
                    </div>';
                }
            ?>

		</div>

		<div class = "new_box">
          <h3>Neuster Beitrag</h3>
          <img id="n_pic" src="../images/12.jpeg" alt="Neuste Beiträge" class="ctb-image-icon">
          <p class = "n_info">Entdecke die Neusten Beiträge unserer Traveler. Lass dich an andere Orte bringe und erhalte Geheimtipps, Ideen und die besten Erfahrungen. Schaue dir jetzt den neusten Beitrag an. </p>
		  <a class="link" href="../blog_entrys/blog_entry.php?newest_search=true">weiterlesen</a>
        </div>


        <div class = "explore_box">
          <h3>Entdecke Neues</h3>
          <img id="d_pic" src="../images/13.jpeg" alt="Entecke ausgewählte Beiträge" class="ctb-image-icon">
          <p class = "d_info">Tokio, Köln oder doch die Maledieven? Inspiration gefällig? Dann schau dir die Beiträge unserer Traveler an. Vielleicht findest du deine nächste Reise genau hier.</p>
          <a class="link" href="../overview/overview.php">entdecken</a>
        </div>

        <div class = "create_box">
          <h3>Deine Erfahrungen</h3>
          <img id="r_pic" src="../images/14.jpeg" alt="Registrieren Bild" class="ctb-image-icon">
          <p class = "r_info">Werde ein Teil der Community und teile mit uns deine Erfahrung. Registriere dich jetzt damit auch andere deine Stories kennen.</p>
          <a class="link" href="../login_system/register.php">jetzt registrieren</a>
        </div>





    </div>


	    <footer>
        <span class="copyright">Pavel's © 2017</span>
        <div class="madefor">Gemacht mit 💚 für Euch Entdecker<br>von Florian, Simone und Valerij</div>
    </footer>

  </body>


</html>
