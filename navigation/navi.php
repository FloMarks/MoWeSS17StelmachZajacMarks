<!DOCTYPE>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <!--Einbindung des navi stylesheets, festlegung des viewports und des charsets.-->
  </head>
  <body>
    <nav>

      <div class="topnav" id="myTopnav">

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <a class="nav" href="../startseite/index.php">Startseite</a>
        <a class="nav" href="../overview/overview.php">Entdecken</a>
        <a class="nav" href="../blog_entrys/create_entry.php">Neuer Beitrag</a>
        <?php
          if(isset($_SESSION['user_id'])){
              
            $username = $_SESSION['user_name'];
              
            echo '<a id="prof_res" href="../profil/user_profil.php?profil='.$username.'">Profil</a><form id="logout" action="../login_system/includes/logout-inc.php" method="POST">
              <button type="submit" name="submit">Logout</button>
            </form>';
          } else {
            echo '<a class="nav" id="log" href="../login_system/login.php">Login</a>';
          }
        ?>
      </div>
      <div id="logo">
          <a href="../startseite/index.php">
        <img id="icon_pic" src="../images/blue-pencil-horizontal-hi.png">
			  <a id="icon" href="#pavels">Pavel's</a>
          </a>
      </div>

      <?php
        if(isset($_SESSION['user_id'])){

          $username = $_SESSION['user_name'];

          echo '<form class="log_sys" action="../login_system/includes/logout-inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            <a id="prof" href="../profil/user_profil.php?profil='.$username.'">Profil</a>
          </form>';
        } else {
          echo '<div class="log_sys">
            <a id="log_btn" href="../login_system/login.php"><button>Login</button></a>
          </div>';
        }
      ?>
    </nav>
  </body>
</html>
