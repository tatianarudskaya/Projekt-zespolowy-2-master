<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.html');
		exit();
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
	
    <!-- <div id="naglowek">
		<a class="h"> Strona <span> - jakiś napis</span></a>
	</div> -->
  	<header>
	<!-- Menu -->
		<nav class="navbar navbar-light navbar-expand-lg">
		<!-- Logo -->
			<a class="navbar-brand" href="index.html"><img src="Obrazki/vk.png" width="25" height="25" class="d-inline-block mr-1 align-bottom" alt=""> b17</a>
		<!-- Przycisk menu w małym oknie -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		<!-- Zakładki -->
			<div class="collapse navbar-collapse" id="mainmenu">
				<ul class="navbar-nav mr-auto">
				<!-- Rozwijająca się część -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> Rozwija się </a>
						<div class="dropdown-menu" aria-labelledby="submenu">
							<a class="dropdown-item" href="#"> Coś 1 </a>
							<a class="dropdown-item" href="#"> Coś 2 </a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"> Coś 3 </a>
							<a class="dropdown-item" href="#"> Coś 4 </a>
						</div>
					</li>
					<!-- zwykła Reszta menu -->
					<li class="nav-item"> <a class="nav-link" href="training.html"> Trening </a> </li>
					<li class="nav-item"> <a class="nav-link" href="articles.html"> Artykuły </a> </li>
				
					<li class="nav-item"> <a class="nav-link" href="contact.html"> Kontakt </a> </li>
					<li class="nav-item"> <a class="nav-link" href="guestbook.html"> Recenzje </a> </li>
					<li class="nav-item"> <a class="nav-link" href="register.php" > Rejestracja </a> </li>
				</ul>
			
			</div>
		</nav>
	
	</header>

	<main>
	<div id="srodek">
		<h2>Logowanie</h2><br>
<body>
	<p>Nie masz konta? <a href="register.php">Zarejestruj się za darmo!</a></p> 
	<br />
	
	<form action="logIN.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
	</div>  
		
 </main>
	<div id="stopka">
	<p>Autorzy projektu: Łukasz Zieliński i Tatiana Rudskaya</p>
</div>
</div>
<!-- Przyciski do przesuwania w gólre i w dół strony --> 
<a href="#" class="to-top"><i class="fa fa-chevron-up"></i></a> 
<a href="#" class="to-bottom"><i class="fa fa-chevron-down"></i></a>    
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
  </body>
</html>