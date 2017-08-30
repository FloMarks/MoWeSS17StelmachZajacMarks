<?php

  include_once 'dbh-inc.php';

  session_start();

  if(isset($_SESSION['user_name'])){

    $cur = $_POST['cur'];
    $name = $_SESSION['user_name'];

    $sql = "SELECT * FROM blog_entry WHERE user_name='$name'";
    $result = mysqli_query($conn, $sql);
    $blog_count = mysqli_num_rows($result);
    $sel = $cur % $blog_count;

    //write mysql data in html fields (blog)
    $pdo = new PDO('mysql:host=localhost;dbname=login_system', 'root', '');
    $sql = "SELECT * FROM blog_entry WHERE user_name='$name' and blog_count='$sel'";

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
