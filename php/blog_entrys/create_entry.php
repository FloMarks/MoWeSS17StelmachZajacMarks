<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <html lang="de">
    <head>
      <title>Beitrag erstellen</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <link href="create_entry_style.css" type="text/css" rel="stylesheet">
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
      <form></form>
    </header>


    <div class = "content-section">
      <div class = "opening-picture">
        <h1>Erstelle einen neuen Eintrag</h1>
        <p>Teile deine Erlebnisse und halte deine Abenteuer fest, damit andere daran teilhaben können.</p>
      </div>

        <?php
          
            echo $_SESSION['user_name'];
            
        ?>
        
        <form action="includes/create_entry-inc.php" method="POST">
      <div class = "inputs" >
        <input id = "entry-title" placeholder="Titel des Beitrags" class="controls" type="text" name="blog_title" required>
        <input id = "place" placeholder="Ort" autocomplete="off" name="blog_place" required>
  	    <textarea id = "entry" cols="160" rows="30" name="blog_content" required></textarea>
      </div>
        

      <div class = "buttons">
        <button class = "add-picture" type = "button">Bilder hinzufügen</button>
        <button class = "save" type="submit" name="submit">Speichern</button>
        <button class = "quit" type = "button">Abbrechen</button>
      </div>
    
        </form>
        </div>
    <footer>
          <span class="copyright">Bleistift-Reisen © 2017</span>
          <div class="madefor">Gemacht mit 💚 für Euch Entdecker</div>
    </footer>
  </body>

</html>
