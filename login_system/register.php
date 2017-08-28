<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Register</title>
    <link href="register_style.css" type="text/css" rel="stylesheet">
  </head>

  <body>
    <form action="includes/register-inc.php" method="POST">

    <header><p>Register</p></header>
        <div class="container">
    
    <input type="text" placeholder="Enter Username" name="uname" required>
    
    <input type="text" placeholder="Enter Email" name="uemail" required>

    <input type="password" placeholder="Enter Password" name="upwd" required>

    <button id="submit" type="submit" name="submit"> Sign up !</button>
    <input type="checkbox" checked="checked"> <p id="accept">I accept the terms and conditions</p>
  </div>

  <div class="container" id="space">
    <a href="../startseite/startseite.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>
  </body>
</html>