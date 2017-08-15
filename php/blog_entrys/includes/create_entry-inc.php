<?php

session_start();

if(isset($_POST['submit'])){
    
    include_once 'dbh-inc.php';
    
    //convert to strings
   
    $uname = $_SESSION['user_name']; 
    $title = mysqli_real_escape_string($conn, $_POST['blog_title']);
    $place = mysqli_real_escape_string($conn, $_POST['blog_place']);
    $content = mysqli_real_escape_string($conn, $_POST['blog_content']);
    $date = getdate();
    
    if(empty($title) || empty($place) || empty($content)){
        header("Location: ../index.php?create=empty");
        exit();   
    } else {
        $sql = "SELECT * FROM blog_entry WHERE title='$title'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
            header("Location: ../create_entry.php?create=titletaken");
            exit();
        } else {
            //save data in db
            $sql2 = "INSERT INTO blog_entry (user_name, title, place, content, date) VALUES ('$uname', '$title', '$place', '$content', NOW());";
            mysqli_query($conn, $sql2);

            header("Location: ../blog_entry.php?create=success");
            exit();
        }
    }
     
}