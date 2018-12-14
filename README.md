# Projekt-zespolowy-2-master

<?php
	/*sprawdzenie wypełnienia wszystkich pól*/
	}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
	/* Funkcja sprawdzaj±ca poprawno¶ć E-Maila */
	function SprawdzEmail($email) {
	$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
/*	if (preg_match("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$" , $email)){*/

	if (preg_match($pattern, $email) === 1){
	return true;
	}
	
	return false;
	}
	if(SprawdzEmail($_POST['email'])){
	/* Tworzymy szkielet wysyłanej wiadomo¶ci */
	$adresemail='jak-cos@wp.pl'; /* Wpisz swój adres e-mail */
	/* Wybierz kodowanie znaków usuwaj±c // */
	$charset = 'iso-8859-2';
	//$charset = 'utf-8';
	$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
	$nadawca="From: $_POST[email]";
	@mail($adresemail, "Formularz kontaktowy z MOja strona", "$wiadomosc", "$nadawca");
	echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";
	}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Wprowadzony adres E-Mail jest niepoprawny!!!</span>"; }
	}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Cofnij i wypełnij wszystkie pola formularza!!!</span>"; }
	?>
