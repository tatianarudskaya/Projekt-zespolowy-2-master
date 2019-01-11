﻿<?php

if ($_SESSION['zalogowany']==false)
	{
		$_SESSION['zalogowany']=false;
	}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
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
	
  <title>Articles</title>
</head>

<body onload="odliczanie();">
  <div class="containet"> 
	<a class="ob_link" href="index.html" title="Tytuł">
	</a>
    <!-- <div id="naglowek">
		<a class="h"> Strona <span> - jakiś napis</span></a>
	</div> -->
  	<header>
	<!-- Menu -->
		<nav class="navbar navbar-light navbar-expand-lg">
		<!-- Logo -->
			<a class="navbar-brand" href="index.php"><img src="Obrazki/vk.png" width="25" height="25" class="d-inline-block mr-1 align-bottom" alt=""> B17</a>
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
					<li class="nav-item"> <a class="nav-link" href="guestbook2.php1"> Recenzje </a> </li>
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
				<img src="Obrazki\artykuły.jpg" alt="Artykuły">
			</div>
		</div>
		<h2>Psychologia na każdy dzień!</h2>
		
			<p><br> Marina pisze dla ciebie:
			</p>
		 
		<b><br><p>Про близость и созависимость</p></b>
			<p>Все мы хотим близких и доверительных отношений. Гармонии внутренней, ощущение счастья. 
			<br>Но, у каждого из нас своя «родительская история», своё воспитание. И порой, нам очень «трудно встретиться» с другим человеком, побыть просто рядом, принять его, повзаимодействовать. Всё мы действуем из привычных ролей и алгоритмов, которыми пользовались в детстве, и которые помогали нам сохранить отношения в те самые далекие детские времена. Определенное наше поведение на родительский «посыл» помогал нам не прерывать контакт с ними, чаще всего подстраиваться и выполнять требования Родителя... 
			<a href="article1.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
	
		<p><b>10 Правил внутренней гармонии</b></p>
			<p>10 Правил - Как придти к внутренней гармонии
			<br>1. «Меня любят и ценят настолько, насколько я люблю и ценю себя»
			<br>Эта фраза должна стать единственным правильным девизом жизни на пути любви к себе. Вы сами сможете стать источником радости и любви. 
			<br>2. Никто не совершенен
			<br>Вспомните слова из фильма «В джазе только девушки»: «У каждого свои недостатки». Полюбите себя таким, какой есть. Никогда не позволяйте унижать себя...
			<a href="article2.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
	
		<p><b>Признаки здоровых отношений</b></p>
			<p>ВЗГЛЯНУТЬ НА СОБСТВЕННЫЕ ОТНОШЕНИЯ СО СТОРОНЫ иногда не мешает — бывает, человек не отдаёт себе отчёта в том, что регулярно подвергается, например, эмоциональному насилию. С другой стороны, некоторое охлаждение по отношению друг к другу совсем необязательно свидетельствует о проблемах в паре — мы уже рассказывали, что по мере формирования привязанности может уменьшиться количество секса. В нашем чеклисте девять критериев, которые помогут вам убедиться, что вы состоите во вполне здоровых отношениях, или задуматься, не пора ли что-то менять...
			<a href="article3.php">kliknij link, aby kontynuować czytanie
			</a>
			</p>
	
		</div>
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
