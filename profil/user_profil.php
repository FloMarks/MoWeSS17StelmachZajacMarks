<!-- Profilseite für jeden Benutzer -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="../navigation/navi_style.css" type="text/css" rel="stylesheet">
    <link href="user_profil.css" type="text/css" rel="stylesheet">
    <script src="../navigation/navi_code.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>User Profile</title>
    <script>
      //jQuery Code
      $(document).ready(function(){
        var blogCount = 0;
        $("#next_entry").click(function(){
          blogCount = blogCount + 1;
          $("#entry").load("includes/user_profile-inc.php", {
            cur: blogCount
          });
        });
      });
    </script>
  </head>

  <!--NAVIGATION-->
  <?php include("../navigation/navi.php");?>


  <!--MAIN-CONTENT-->

  <?php
    if(isset($_GET['profil'])){
      $name = $_GET['profil'];
      $_SESSION['cur_user'] = $name;  
        
      //write mysql data in html fields (blog)
      $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
      $sql = "SELECT * FROM blog_entry WHERE user_name='$name'";

      foreach ($pdo->query($sql) as $row);

      //write mysql data in html fields (user)
      $pdo2 = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
      $sql2 = "SELECT * FROM users WHERE user_name='$name'";

      foreach ($pdo2->query($sql2) as $row2);
    }
  ?>

  <body>
    <div id="main_content">
      <div id="user">
        <div id="user_picture">
          <img src="../images/user_picture_example.jpg" alt="User Picture">
        </div>

        <div id="user_information">
          <section>
            <p>Informationen</p>
              <ul>
                <li>Name: <?php echo $row2['user_name'] ;?></li>
                <li>Email: <?php echo $row2['user_email'] ;?></li>
                <li>Beiträge: <?php echo $row2['blog_count'] + 1 ;?></li>
              </ul>
          </section>
        </div>
      </div>

      <div id="user_posts">
        <div class="post" id="entry">
          <?php
            if(isset($_GET['profil'])){
              $name = $_GET['profil'];

              //write mysql data in html fields (blog)
              $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
              $sql = "SELECT * FROM blog_entry WHERE user_name='$name'";

              foreach ($pdo->query($sql) as $row);

              $title = "title";
              $preview = "preview";
              $more = "more";
              $tag = $row['blog_entry_id'];

              echo '<p id="'.$title.'">';
              echo $row['title'];
              echo "</p>";
              echo '<img src="../images/login_back_2.jpg" alt="icon" />';
              echo '<p id="'.$preview.'">';
              echo $row['content'];
              echo '<a id="'.$more.'" href="../blog_entrys/blog_entry.php?id_search='.$tag.'">zum Eintrag...</a>';
              echo "</p>";
            }
          ?>
        </div>

      </div>

      <div id="next">
        <button id="next_entry" type="button">Nächster Beitrag</button>
      </div>
    </div>

    <footer>
      <span class="copyright">Pavel's © 2017</span>
      <div class="madefor">Gemacht mit 💚 für Euch Entdecker<br>von Florian, Simone und Valerij</div>
    </footer>
  </body>
 <!--MAIN-CONTENT ENDE-->
</html>
