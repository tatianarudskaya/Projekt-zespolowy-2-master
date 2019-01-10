<?php
session_start(); // Right at the top of your script

if ($_SESSION['zalogowany']==false)
	{
		$_SESSION['zalogowany']=false;
	}

?>


<?php

	
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$nick = $_POST['nick'];
		
		//Sprawdzenie długości nicka
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		
			
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email', 100, 100, 100, 14)"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: index.html');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
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
					<li class="nav-item"> <a class="nav-link" href="guestbook.html"> Recenzje </a> </li>
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
		<h2>Rejestracja</h2><br> Akutalna data:<div id="zegar"></div>
<body>
	<p>Masz już konto? <a href="log.php">Kliknij tu i zaloguj się na nie!</a></p> 
	<form method="post">
	
		Nickname: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nick']))
			{
				echo $_SESSION['fr_nick'];
				unset($_SESSION['fr_nick']);
			}
		?>" name="nick" /><br />
		
		<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>
		
		E-mail: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" /><br />
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		
		Twoje hasło: <br /> <input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1" /><br />
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>		
		
		Powtórz hasło: <br /> <input type="password" value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" name="haslo2" /><br />
		
		<p>Regulamin znajduje się <a target="_blank" href="regulamin.php">tutaj</a></p> 
		
		<label>
			<input type="checkbox" name="regulamin" <?php
			if (isset($_SESSION['fr_regulamin']))
			{
				echo "checked";
				unset($_SESSION['fr_regulamin']);
			}
				?>/> Potwierdzam, że zapoznanie się z regulaminem
		</label>
		
		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>	
		
			
		
		<br />
		
		<input type="submit" value="Zarejestruj się" />
		
	</form>
	
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