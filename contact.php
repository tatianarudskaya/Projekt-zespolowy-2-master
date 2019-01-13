<?php

session_start();
if ($_SESSION['zalogowany']==false)
	{
		$_SESSION['zalogowany']=false;
	}

?>
<!doctype html>

<html lang="en" dir="ltr">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="UTF-8 ">
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
  
  <title>Kontakt</title>
  </head>

<body onload="odliczanie();">
  <div class="containet"> 
	<a class="ob_link" href="index.html" title="Tytuł">
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
	<form action="contact.php" method="post"> <!--nazwa strony na ktĂłrej znajduje siÄ™ formularz-->
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
	/*sprawdzenie wypeĹ‚nienia wszystkich pĂłl*/
	}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
	/* Funkcja sprawdzajÂ±ca poprawnoÂ¶Ä‡ E-Maila */
	function SprawdzEmail($email) {
	$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
/*	if (preg_match("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$" , $email)){*/

	if (preg_match($pattern, $email) === 1){
	return true;
	}
	
	return false;
	}
	if(SprawdzEmail($_POST['email'])){
	/* Tworzymy szkielet wysyĹ‚anej wiadomoÂ¶ci */
	$adresemail='fatoush3@gmail.com'; /* Wpisz swĂłj adres e-mail */
	/* Wybierz kodowanie znakĂłw usuwajÂ±c // */
	$charset = 'iso-8859-2';
	//$charset = 'utf-8';
	$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
	$nadawca="From: $_POST[email]";
	@mail($adresemail, "Formularz kontaktowy z strony na PRojekt Zespołowy Styczeń 2019!", "$wiadomosc", "$nadawca");
	echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został‚ wysłany.</span>";
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
