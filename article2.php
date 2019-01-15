<?php

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
	<script src="text/javascript"  src="js/bootstrap.bundle.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
  <title>Articles</title>
</head>

<body onload="odliczanie();">
  <div class="containet"> 
	<a class="ob_link" href="index.php" title="Tytuł"></a>

    <!-- <div id="naglowek">
		<a class="h"> Strona <span> - jakiś napis</span></a>
	</div> -->
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
				<img src="Obrazki\artykuły.jpg" alt="Artykuły">
			</div>
		</div>
		<h2>Psychologia na każdy dzień!</h2>
		
			<p><br><a href="articles.php">kliknij link, aby powrócić do poprzedniej strony </a>
			</p>
					 		
		<p><b>10 Правил внутренней гармонии</b></p>
			<p>10 Правил - Как придти к внутренней гармонии
			<br>1. «Меня любят и ценят настолько, насколько я люблю и ценю себя»
			<br>Эта фраза должна стать единственным правильным девизом жизни на пути любви к себе. Вы сами сможете стать источником радости и любви. 
			<br>2. Никто не совершенен
			<br>Вспомните слова из фильма «В джазе только девушки»: «У каждого свои недостатки». Полюбите себя таким, какой есть. Никогда не позволяйте унижать себя.
			<br>3. Не сравнивайте себя с другими
			<br>Вы особенны и неповторимы. Любить себя - значит относиться к себе с любовью.
			<br>4. Примите свои недостатки
			<br>Cлабости в какой-то ситуации могут засиять ярче достоинств.
			<br>5. Совершенствуйтесь
			<br>У вас всегда есть шанс стать лучше. Любить себя - значит постоянно работать над собой.
			<br>6. Не думайте о том, что о вас подумают другие
			<br>Они сами озабочены тем, что о них думаете вы. Формируйте свое позитивное мнение о себе.
			<br>7. Хвалите себя даже за самые маленькие успехи.
			<br>8. Действуйте исходя из своих внутренних побуждений
			<br>Тогда не будет ощущения, что делали что-либо не по своей воле. Уважайте свои мысли, желания и мечты.
			<br>9. Старайтесь самостоятельно принимать решения
			<br>Так сможете оценить собственную значимость и независимость.
			<br>10. Будьте самими собой
			<br>Говорите и делайте то, что считаете нужным. При этом, конечно, не ущемляя интересы других.
			<br>И тогда у вас заискрится взгляд, а улыбка счастья и любви засияет на вашем лице, и вы преобразитесь прямо на глазах... Вы сами станете источником любви, радости, света и силы. Вы заживете в гармонии с собой. Вот увидите, у вас все получится! Вы станете самыми красивыми на свете. Надо просто быть в ладу с самими собой. И с собой, и с окружающим миром.
			<br>Совершенствуйтесь и ищите себя! Ведь только разобравшись в самих себе, мы сможем принять себя. Любить себя и наслаждаться радостью жизни так же естественно для человека, как полет птицы в небе. Этот мир для вас, эта жизнь для вас, а значит, и любовь - для вас!
	
	<p><br><a href="articles.php">kliknij link, aby powrócić do poprzedniej strony </a>
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
