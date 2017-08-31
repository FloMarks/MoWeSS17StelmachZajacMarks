<?php

session_start();

if(isset($_POST['submit'])){

  include 'dbh-inc.php';

  $uname = mysqli_real_escape_string($conn, $_POST['uname']);
  $upwd = mysqli_real_escape_string($conn, $_POST['upwd']);

  //Error handlers
  //Check if fields are empty

  if(empty($uname) || empty($upwd)){
    header("Location: ../index.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_name='$uname'";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1){
      header("Location: ../index.php?login=error");
      exit();
    } else {
      if($row = mysqli_fetch_assoc($result)){
        //de-hashing password
        $hashedPwdCheck = password_verify($upwd, $row['user_pwd']);

        if($hashedPwdCheck == false){
          header("Location: ../index.php?login=error");
          exit();
        } elseif ($hashedPwdCheck == true){
          //Log in the user
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['user_email'] = $row['user_email'];
          $_SESSION['user_pwd'] = $row['user_pwd'];

          header("Location: ../../startseite/index.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../login.php?login=error");
  exit();
}
