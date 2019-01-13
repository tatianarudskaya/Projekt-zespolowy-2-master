<?php

Session_start(); // Right at the top of your script

if ($_SESSION['zalogowany']==false)
	{
		$_SESSION['zalogowany']=false;
	}

?>


<!DOCTYPE html>

<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	
	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>
	<script type="text/javascript" src="js/button.js"></script>
	
  <title>Training</title>
</head>

<body onload="odliczanie();">
  <div class="containet"> 
	<a class="ob_link" href="index.php" title="Tytuł">
	</a>
   
  	<header>
	<!-- Menu -->
		<nav class="navbar navbar-light navbar-expand-lg">
		<!-- Logo -->
			<a class="navbar-brand" href="index.php"><img src="Obrazki/vk.png" width="25" height="25" class="d-inline-block mr-1 align-bottom" alt=""> b17</a>
		<!-- Przycisk menu w małym oknie -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		<!-- Zakładki -->
			<div class="collapse navbar-collapse" id="mainmenu">
				<ul class="navbar-nav mr-auto">
				<!-- Rozwijająca się część -->
					
					<!-- zwykła Reszta menu -->
					<li class="nav-item"> <a class="nav-link" href="training.php"> Trening </a> </li>
					<li class="nav-item"> <a class="nav-link" href="articles.php"> Artykuły </a> </li>
					<li class="nav-item"> <a class="nav-link" href="contact.php"> Kontakt </a> </li>
					<li class="nav-item"> <a class="nav-link" href="guestbook2.php"> Recenzje </a> </li>
					<li class="nav-item"> <a class="nav-link" href="regulamin.php"> Regulamin </a> </li>
					<li class="nav-item"> <a class="nav-link" href="register.php"> Rejestracja </a> </li>	
					<!--
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> Konto </a>
						<div class="dropdown-menu" aria-labelledby="submenu">
							<a class="dropdown-item" href="regulamin.html"> Regulamin </a>
							<a class="dropdown-item" href="register.php"> Załóż Konto </a>
							<a class="dropdown-item" href="log.php"> Zaloguj się </a>
							 <div class="dropdown-divider"></div>
							
							<a class="dropdown-item" href="#"> Coś 4 </a>
						</div>
					</li>-->
				</ul>
			<li class='active' style='float:right;'>
				  <?php 
  if($_SESSION['zalogowany']==true)
    { 
      echo $_SESSION["user"];
	  echo ", ";
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['zalogowany']==false)
    {
      echo '<a href="log.php"><span>Login</span></a></li>';
    }
  ?>
				
			</div>	
		</nav>
	 </header>
	<main>
	<div id="srodek">
		<br>		
		<div id="aside">
			<div id="picture">
				<img src="Obrazki\kursy.jpg" alt="kursy">
			</div>
		</div>
				
			<h2>Psychologia w każdym domu</h2>
				
			<p> Tel. +48697700000 Marina
			<br><br>Możesz uzyskać dodatkowe porady, dotyczące wyboru odpowiedniego kursu szkoleniowego.
			</p>
		 
		<br><br><p><b>«Гештальт-Подход, Начало»</b></p>
			<p>Жить Жизнь «Здесь и Сейчас», не откладывая её «на потом». Формат группы: терапевтически-обучающий.
			<a href="training1.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
	
		<p><b>Женская Группа «Психология Отношений»</b></p>
			<p>Наш второй WorkShop на котором мы с Вами запустим волшебные изменения Вашей жизни. Живи ярко и комфортно!
			<a href="training2.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
			
			<p><b>Психология Отношений</b></p>
			<p>Улучшение взаимоотношений с партнером, мужем. Развитие и принятие своей женственности. Понимание своих желаний. Любовь к себе. Счастливые отношения. Всё это и многое другое будет в нашем курсе.
			<a href="training3.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
			
			<p><b>Деньги и отношения</b></p>
			<p>В каких отношениях мы находимся с деньгами? Любят ли нас деньги и любим ли мы их?Хотим или боимся их меть? Всё это Вы узнаете на моём тренинге.
			<a href="training4.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
			
			<p><b>Женская интересная группа</b></p>
			<p>Быть женщиной и ощущать женственность важно. Мой тренинг о нас - женщинах. Мы будем работать с картами и арт-терапевтическими методиками. Будем принимать свою женскую часть и писать свою собственную сказку!...
			<a href="training5.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
			
			<p><b>Трансформационная игра «Дорога к...»</b></p>
			<p>С использованием магических (метафорически-ассоциативных) карт, игрового поля и кубика. Мы найдём решение для вашей проблемы
			<a href="training6.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
			
	</div>
  </main>
<div id="stopka">
<p>Autorzy projektu: Łukasz Zieliński i Tatiana Rudskaya</p>
</div>
<!-- Przyciski do przesuwania w gólre i w dół strony --> 
<a href="#" class="to-top"><i class="fa fa-chevron-up"></i></a> 
<a href="#" class="to-bottom"><i class="fa fa-chevron-down"></i></a>    
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
