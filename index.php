<?php
session_start(); // Right at the top of your script

if ($_SESSION['zalogowany']==false)
	{
		$_SESSION['zalogowany']=false;
	}

?>
<!doctype html>
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
	
    <title>B17</title>
  </head>
  
  <body onload="odliczanie();">
  <div class="containet"> 
	
   
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
		<h2>Strona Główna</h2><br>
			<section>Wersja alfa.v3 strony  </section>
		
		 
	
		<div id="picture">
			<img src="Obrazki\women.jpg" alt="crx">
		</div>
			<p> Tak
			<br><br><b>JDM</b><br> J - jakiś tekst , D - bo pogrubiony, M - bo czemu nie :p
			</p>
		 
		<div id="picture2">
			<img src="Obrazki\18_plus.png" alt="mugen">
		</div>
		<h1>Co robimy?</h1>
			<p>Tworzymy stronke 
			<br>Zajmujemy się także modyfikacjami tej stronki
			</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p> 
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				<p> sdaaa aaaaaaa aaaaaaa aaaaaaa asdasdasda sdadasd asdasd  
				daaa aaaaaa aaaaa aaaaaaaa aaasda sdasd asdada sdasd\n daaaaaaaa aaaaaaa aaaaaaa aaasdas dasdas dadasdas d\n daaaaaaaa aaaaaaa aaaaaaaaa asdas das dasda dasdasd daaaaaaa aaaaaaaaaa aaaaaaa asdas dasd asdadasd asd 
				daaaaaa aaaaa aaaaaaa aaaaaaasda sdasdasdadasd asd daaaaaaa aaaa aaaa aaaaaaaa aasdasdas dasdad asdasddaa aaaaaaaaa aaaaaaa aaaaa aasdasd asdasdad asdasd</p>
				
				</div>  
		
 </main>
	<div id="stopka">
	
	<p>Autorzy projektu: Łukasz Zieliński i Tatiana Rudskaya  </p>
	
</div>
</div>
<!-- Przyciski do przesuwania w gólre i w dół strony --> 
<a href="#" class="to-top"><i class="fa fa-chevron-up"></i></a> 
<a href="#" class="to-bottom"><i class="fa fa-chevron-down"></i></a>    
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
  </body>
</html>