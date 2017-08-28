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
            
            $sql = "SELECT * FROM blog_entry WHERE user_name='$uname'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            
            $sql = "UPDATE users SET blog_count=$count WHERE user_name='$uname'";
            $result = mysqli_query($conn, $sql);
            
            //save data in db
            $sql2 = "INSERT INTO blog_entry (user_name, title, place, content, date, blog_count) VALUES ('$uname', '$title', '$place', '$content', NOW(), $count);";
            mysqli_query($conn, $sql2);
            
            
            $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
            $sql3 = "SELECT blog_entry_id from blog_entry ORDER BY blog_entry_id DESC LIMIT 1";
            foreach ($pdo->query($sql3) as $row);
            $id_cur = $row['blog_entry_id'];
        
            header("Location: ../blog_entry.php?id_search=$id_cur");
            exit();
        }
    }
     
}