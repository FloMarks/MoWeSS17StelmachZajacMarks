<!DOCTYPE>
<html>
    <head>
        <link href="navi_style.css" type="text/css" rel="stylesheet">
        <script src="navi_code.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!--Einbindung des navi stylesheets, festlegung des viewports und des charsets.-->
    </head>
    <body>
        <nav>

        <div class="topnav" id="myTopnav">

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            <a class="nav" href="../startseite/startseite.php">Startseite</a>
            <a class="nav" href="../overview/overview.php">Entdecken</a>
            <a class="nav" href="../blog_entrys/create_entry.php">Neuer Beitrag</a>
            <?php 
                if(isset($_SESSION['user_id'])){
                    echo '<form id="logout" action="../login_system/includes/logout-inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                    </form>';
                } else {
                    echo '<a class="nav" id="log" href="../login_system/login.php">Login</a>';
                }
            ?>


        </div>
        <div id="logo">
            <img id="icon_pic" src="../images/blue-pencil-horizontal-hi.png">
			<a id="icon" href="#pavels">Pavel's</a>

        </div>
		
		
            <?php 
                if(isset($_SESSION['user_id'])){
                    echo '<form class="log_sys" action="../login_system/includes/logout-inc.php" method="POST">
                    <button type="submit" name="submit">Logout</button>
                    </form>';
                } else {
                    echo '<div class="log_sys">
                    <a href="../login_system/login.php"><button>Login</button></a>
                    </div>';
                }
            ?>
        
        </nav>
    

    </body>



</html>