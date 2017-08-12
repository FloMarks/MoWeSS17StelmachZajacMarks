<?php
session_start();
?>
    
<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Login</title>
    <link href="login_style.css" type="text/css" rel="stylesheet">
  </head>

  <body>
    <form action="includes/login-inc.php" method="POST">

    <header><p>Login</p></header>
<div class="container">
    <input type="text" placeholder="Enter Username" name="uname" required>

    <input type="password" placeholder="Enter Password" name="upwd" required>

    <button id="submit" type="submit" name="submit"> Ok !</button>
    <input type="checkbox" checked="checked"> <p id="remember">Remember me</p>
  </div>

  <div class="container" id="space">
    <button type="button" class="cancelbtn">Cancel</button>
    <a href="register.php"><button type="button" class="registerbtn">  Register </button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
  </body>
</html>