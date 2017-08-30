<?php

if(isset($_POST['submit'])){

  include_once 'dbh-inc.php';

  //convert to strings
  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
  $upwd = mysqli_real_escape_string($conn, $_POST['upwd']);

  //Error handlers
  //Check for empty fields
  if(empty($uname) || empty($uemail) || empty($upwd)){
    header("Location: ../register.php?register=empty");
    exit();
  } else {
    //Check if username is free
    $sql = "SELECT * FROM users WHERE user_name='$uname'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
      header("Location: ../register.php?register=usernametaken");
      exit();
    } else {
      //Check if email is valid
      if(!filter_var($uemail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?register=email");
        exit();
      } else {
        //hash password
        $hashedPwd = password_hash($upwd, PASSWORD_DEFAULT);

        //insert user into db
        $sql2 = "INSERT INTO users (user_name, user_email, user_pwd) VALUES ('$uname', '$uemail', '$hashedPwd');";
        mysqli_query($conn, $sql2);

        header("Location: ../login.php?register=success");
        exit();
      }
    }
  }
} else {
  header("Location: ../register.php");
  exit();
}
