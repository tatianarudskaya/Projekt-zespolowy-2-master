<!DOCTYPE html>

<html lang="en">
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
	<script src="text/javascript"  src="js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
  <title>Contact</title>
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
					<li class="nav-item"><a class="nav-link" href="training.html"> Trening </a> </li>
					<li class="nav-item"> <a class="nav-link" href="articles.html"> Artykuły </a> </li>
					
					<li class="nav-item"> <a class="nav-link" href="contact.php"> Kontakt </a> </li>
					<li class="nav-item"> <a class="nav-link" href="guestbook.html"> Recenzje </a> </li>
					
					<li class="nav-item"> <a class="nav-link" href="#" > Rejestracja </a> </li>
					<li class="nav-item"> <a class="nav-link" href="#"> Logowanie </a> </li>
				</ul>
				
				
			</div>	
		</nav>
	 </header>
	<main>
	<div id="srodek">
		<h2>Skontaktuj się z nami</h2><br>
					
		<div id="picture">
			<img src="Obrazki\sofa.jpg" alt="doktor">
		</div>
			<p> Tel. +48697700000 Marina
			<br><br><b>Zwonimy!</b><br> Zadzwoń już dziś i uzyskaj zniżkę!
			</p>
		 
		<p><br><br><b>Adres</b><br></p>
			<p>Miasto Brest 
			<br>ulica Zielona 55
			</p>
			<p><b> Masz jakieś pytania? Napisz:</b> </p>
<?php
	if(empty($_POST['submit'])){
	?>
	<form action="contact.php" method="post"> <!--nazwa strony na której znajduje się formularz-->
	Imię i Nazwisko:<br />
	<input type="text" name="imienazwisko" style="width:300px;"/><br />
	E-Mail:<br />
	<input type="text" name="email" style="width:300px;"/><br />
	Treść wiadomości:<br />
	<textarea name="trescwiadomosci" cols="30" rows="6" style="width:300px;"></textarea><br />
	<input type="submit" name="submit" value="Wyślij formularz"/> 
	<input type="reset" value="Wyczyść"/>
	</form>
<?php
	/*sprawdzenie wypełnienia wszystkich pól*/
	}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
	/* Funkcja sprawdzaj±ca poprawno¶ć E-Maila */
	function SprawdzEmail($email) {
	if (!eregi("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$" , $email)){
	return false;
	}
	return true;
	}
	if(SprawdzEmail($_POST['email'])){
	/* Tworzymy szkielet wysyłanej wiadomo¶ci */
	$adresemail='scyet.3@gmail.com'; /* Wpisz swój adres e-mail */
	/* Wybierz kodowanie znaków usuwaj±c // */
	$charset = 'iso-8859-2';
	//$charset = 'utf-8';
	$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
	$nadawca="From: $_POST[email]";
	@mail($adresemail, "Formularz kontaktowy z www.lukasskoda.cba.pl", "$wiadomosc", "$nadawca");
	echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";
	}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Wprowadzony adres E-Mail jest niepoprawny!!!</span>"; }
	}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Cofnij i wypełnij wszystkie pola formularza!!!</span>"; }
	?>
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
