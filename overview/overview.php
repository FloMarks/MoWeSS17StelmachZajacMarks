<!-- Overview -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link href="overview_style.css" type="text/css" rel="stylesheet">
	  <link href="../navigation/navi_style.css" type="text/css" rel="stylesheet">
	  <script src="../navigation/navi_code.js"></script>
    <title>Entdecken</title>
</head>

<!--NAVIGATION-->
<?php include("../navigation/navi.php");?>


<body>

    <div class="wrapper">

		<div class="box overview_pic"><h1 id="welcome">Werde zum Entdecker</h1></div>
		<div class="box overview_text"><h2 id="overview_text_ins">Lass dich inspirieren</h2>
		<h3 id="overview_text_info">
		Hier findest du eine Auswahl einiger Orte welche unsere Traveler bereist haben. Von Australien bis Zypern unsere Traveler
			waren überall und teilen mit uns Ihre Erfahrungen. Trage deinen Teil bei und schreibe uns deine Erfahrungen und vernetze
			dich mit anderen Reisenden!</h3>
		</div>



		<div class="box overview_box1"></div>
				<div class="box filter_box1"><a href="../blog_entrys/blog_entry.php?search=Pompeji"><h1 id="name_box1">Pompeji</h1></div></a>
		<div class="box overview_box2"></div>
				<div class="box filter_box2"><a href="../blog_entrys/blog_entry.php?search=Koeln"><h1 id="name_box2">Köln</h1></div></a>
		<div class="box overview_box3"></div>
				<div class="box filter_box3"><a href="../blog_entrys/blog_entry.php?search=Nepal"><h1 id="name_box3">Nepal</h1></div></a>
		<div class="box overview_box4"></div>
				<div class="box filter_box4"><a href="../blog_entrys/blog_entry.php?search=Malediven"><h1 id="name_box4">Malediven</h1></div></a>
		<div class="box overview_box5"></div>
				<div class="box filter_box5"><a href="../blog_entrys/blog_entry.php?search=Tokyo"><h1 id="name_box5">Tokio</h1></div></a>
		<div class="box overview_box6"></div>
				<div class="box filter_box6"><a href="../blog_entrys/blog_entry.php?search=Melbourne"><h1 id="name_box6">Melbourne</h1></div></a>
		<div class="box overview_box7"></div>
				<div class="box filter_box7"><a href="../blog_entrys/blog_entry.php?search=Niagarafaelle"><h1 id="name_box7">Niagarafälle</h1></div></a>
		<div class="box overview_box8"></div>
				<div class="box filter_box8"><a href="../blog_entrys/blog_entry.php?search=Kolumbien"><h1 id="name_box8">Kolumbien</h1></div></a>
		<div class="box overview_box9"></div>
				<div class="box filter_box9"><a href="../blog_entrys/blog_entry.php?search=Paris"><h1 id="name_box9">Paris</h1></div></a>
    </div>

    <footer>
        <span class="copyright">Pavel's © 2017</span>
        <div class="madefor">Gemacht mit 💚 für Euch Entdecker<br>von Florian, Simone und Valerij</div>
    </footer>


</body>

</html>
