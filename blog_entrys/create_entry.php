<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Beitrag erstellen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="create_entry_style.css" type="text/css" rel="stylesheet">
    <link href="../navigation/navi_style.css" type="text/css" rel="stylesheet">
    <script src="../navigation/navi_code.js"></script>
  </head>

<!--NAVIGATION-->
<?php include("../navigation/navi.php");?>

  <?php
    if(isset($_SESSION['user_id'])){
      echo '<body>
        <div class = "content-section">
          <div class = "opening-picture">
            <h1>Erstelle einen neuen Eintrag</h1>
            <p>Teile deine Erlebnisse und halte deine Abenteuer fest, damit andere daran teilhaben können.</p>
          </div>

          <form id="input_form" action="includes/create_entry-inc.php" method="POST">
            <div class = "inputs" >
              <input id = "entry-title" placeholder="Titel des Beitrags" class="controls" type="text" name="blog_title" required>
              <input id = "place" placeholder="Ort" autocomplete="off" name="blog_place" required>
              <textarea id = "entry" cols="160" rows="30" name="blog_content" required></textarea>
            </div>

            <div class = "buttons">
              <button class = "add-picture" type = "button">Bilder hinzufügen</button>
              <button class = "save" type="submit" name="submit">Speichern</button>
              <a  href="../startseite/index.php"><button class = "quit" type = "button">Abbrechen</button></a>
            </div>

          </form>
        </div>

        <footer>
          <span class="copyright">Bleistift-Reisen © 2017</span>
          <div class="madefor">Gemacht mit 💚 für Euch Entdecker<br>von Florian, Valerij und Simone</div>
        </footer>
      </body>';
    } else {
      echo '<h2 id="alert">Du bist nicht eingeloggt !</h2>';
    }
  ?>
</html>
