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
		<h2>Regulamin</h2><br>
			<p><b> Umowa użytkownika</b></p>
<table>

<p>Niniejsza Umowa określa warunki korzystania przez użytkowników materiałów i usług strony internetowej b17.ru, której administratorem jest indywidualny przedsiębiorca Trefiłow Dmitrij Siergiejewicz.</p>

<p><b>1. Przepisy ogólne.</b></p>

1.1. W niniejszym dokumencie i jego załącznikach obowiązują następujące terminy i definicje:</br>

a) Umowa - niniejszy dokument wraz ze wszystkimi dodanymi uzupełnieniami, zmianami i załącznikami.</br>

b) Strona - zautomatyzowany system informacyjny dostępny w Internecie pod adresem sieciowym w domenie (w tym poddomeny).</br>

c) Użytkownik - osoba zdolna do przystąpienia do niniejszej Umowy w celu skorzystania z możliwości oferowanych przez Witrynę.</br>

d)Specjalista - rodzaj rejestracji na stronie w celu dalszego informowania odwiedzających o osobistych umiejętnościach zawodowych lub świadczonych usługach.</br>

e) Klient - rodzaj rejestracji na stronie w celu uzyskania dalszej pomocy, porady eksperta lub komunikacji.</br>

f) Usługa - kompleks usług świadczonych Użytkownikowi za pomocą Witryny.</br>

g) Treści - obrazy, tekst, materiały audio i wideo, informacje i wiadomości dowolnego rodzaju.</br>

h) Konto osobiste - osobista sekcja Witryny, do której Użytkownik uzyskuje dostęp po przejściu rejestracji i / lub autoryzacji.</br> </br> 

<p>Konto osobiste służy do przechowywania danych osobowych Użytkownika, przeglądania i zarządzania dostępną funkcjonalnością Witryny.</p>

<p>1.2. Witryna oferuje Użytkownikowi możliwość korzystania z jej możliwości i usług oferowanych na jej podstawie na warunkach określonych w niniejszej Umowie.</p>

<p>1.3. Witryna oferuje Użytkownikom dostęp do szerokiej gamy usług z dziedziny psychologii, w tym części artykułów, szkoleń, organizacji, forum, konsultacji eksperckich i innych sekcji dotyczących komunikacji, wyszukiwania, umieszczania i przechowywania różnego rodzaju informacji i materiałów (treści). Wszystkie aktualnie istniejące usługi, jak również wszelkie opracowania i / lub dodanie nowych, są przedmiotem niniejszej Umowy.</p>

<p>1.4. Witryna ma prawo w dowolnym momencie i bez uprzedniego powiadomienia użytkownika, aby wprowadził zmiany na liście usług oferowanych w Witrynie i (lub) w cenach mających zastosowanie do świadczonych usług.</p>

<p>1.5. Korzystanie z witryny oznacza korzystanie z Usług świadczonych przez serwis w dowolny sposób iw dowolnej formie, w tym:</p>

a) rejestracja i / lub autoryzacja na Stronie;</br>

b) przeglądanie treści zamieszczonych w Witrynie;</br>

c) umieszczanie lub wyświetlanie w witrynie dowolnej treści;</br>

d) inne wykorzystanie funkcjonalności Witryny lub świadczonych Usług;</br> </br>

<p>1.6. Witryna zastrzega sobie prawo do zmiany, dodawania lub usuwania klauzul niniejszej Umowy w dowolnym momencie bez powiadamiania użytkownika. Odpowiedzialność za śledzenie zmian w niniejszej umowie spoczywa na użytkowniku. Aktualna wersja Umowy znajduje się na stronie internetowej.</p>

<p>1.7. Umowa wchodzi w życie z chwilą wyrażenia przez Użytkownika zgody na jej warunki w sposób przewidziany w punkcie 1.7 Umowy.</p>

<p>1.8. Korzystanie z witryny i jej usług określonych w punkcie 1.5. Możliwości, Użytkownik potwierdza, że ​​zapoznał się z warunkami Umowy i akceptuje je w całości, bez zastrzeżeń i wyjątków. W przypadku nieporozumienia użytkownika z jakimkolwiek postanowieniem Umowy lub jej załączników, Użytkownik musi zaprzestać korzystania z Witryny i jej Usług.</p>

<p>1.9. W przypadku zmiany Umowy w Serwisie w sposób przewidziany w punkcie 1.6 Umowy, z którą Użytkownik się nie zgadza, jest on zobowiązany do zaprzestania korzystania z Witryny i jej Usług.</p>
</br>
<p><b>2. Ogólne warunki użytkowania.</b></p>

<p>2.1. Ogólne warunki dla wszystkich użytkowników.</p>

<p>2.1.1. Przeglądanie Zawartości zamieszczonej w Witrynie w domenie publicznej nie wymaga obowiązkowej rejestracji i / lub autoryzacji Użytkownika.</p>

<p>2.1.2. Jakiekolwiek inne wykorzystanie funkcjonalności Witryny, w tym korzystanie z Usług, może wymagać od Użytkownika rejestracji i autoryzacji w Witrynie.</p>

<p>2.1.3. Lista funkcjonalności Witryny, której użycie wymaga uprzedniej rejestracji i / lub autoryzacji, a także przyjęcie dodatkowych dokumentów do korzystania z Usług w razie potrzeby, jest określana według własnego uznania Witryny i może być zmieniona jednostronnie bez uprzedzenia.</p>

<p>2.1.4. Informacje o Użytkowniku zawarte na koncie i koncie osobistym Użytkownika są przechowywane i przetwarzane przez Witrynę zgodnie z Polityką prywatności (Załącznik 1. Polityka prywatności ).</p>

<p>2.1.5. Użytkownik ponosi wyłączną odpowiedzialność za bezpieczeństwo (odporność na wybór lub zgadywanie) wybranych przez niego środków dostępu do konta (hasła), a także zapewnia ich poufność. Użytkownik ponosi wyłączną odpowiedzialność za wszelkie działania i ich konsekwencje popełnione na koncie Użytkownika, w tym przypadki dobrowolnego przekazania przez Użytkownika danych w celu uzyskania dostępu do konta Użytkownika osobom trzecim w każdych warunkach. W tym przypadku wszelkie działania wykonywane na koncie Użytkownika są uważane za dokonane przez samego Użytkownika, chyba że Użytkownik powiadomi Witrynę o nieuprawnionym dostępie do niego przy użyciu konta Użytkownika i / lub wszelkich naruszeń (podejrzeń o naruszenie) jego funduszy pocztą elektroniczną. dostęp do konta.</p>

<p>2.1.6. Witryna ma prawo zablokować lub usunąć konto Użytkownika, a także odmówić dostępu do niektórych Usług, usunąć dowolne treści bez podania przyczyny, w tym jeśli Użytkownik naruszy warunki niniejszej Umowy lub jej aplikacji, lub jeśli konto użytkownika nie było używane przez więcej niż 12 (dwanaście ) miesiąc kalendarzowy z rzędu.</p>

<p>2.2. Warunki przy rejestracji na stronie jako specjalisty.</p>

<p>2.2.1. Rejestrując się na Stronie jako Specjalista, użytkownik zobowiązuje się do dostarczania dokładnych i pełnych informacji o sobie w kwestiach proponowanych w formularzu rejestracyjnym i Koncie osobistym oraz do aktualizowania tych informacji.</p>

<p>2.2.2. Witryna zastrzega sobie prawo do zażądania od specjalisty w dowolnym momencie potwierdzenia danych podanych podczas rejestracji, a także żądania w tym zakresie dokumentów potwierdzających (w szczególności dokumentów tożsamości, dokumentów edukacyjnych), których nie można podać, które według uznania Strony mogą być utożsamiane. do podania niedokładnych informacji i pociąga za sobą konsekwencje, o których mowa w pkt 2.1.6. Umowa.</p>

<p>2.3. Warunki przy rejestracji na stronie jako klienta.</p>

<p>2.3.1. Klient ma prawo do użycia fikcyjnej nazwy lub pseudonimu podczas rejestracji, pod warunkiem, że nie zostanie to zrobione w celu podszycia się pod inną osobę, ale jedynie w celu zachowania poufności przy prośbie o pomoc lub komunikację w Witrynie.</p>

<p>2.3.2. Klient zdaje sobie sprawę i akceptuje to, że zwracając się do Specjalistów, otrzymana odpowiedź odzwierciedla jedynie punkt widzenia autora wiadomości i nie jest jednoznaczna. Klient przyjmuje do wiadomości i zgadza się, że tylko osoba osobiście podejmuje decyzję dotyczącą otrzymanej porady lub porady. Witryna nie ponosi odpowiedzialności za zalecenia specjalistów lub innych użytkowników. Witryna nie ponosi odpowiedzialności za skutki wynikające z wykorzystania informacji, porad lub konsultacji uzyskanych w Witrynie lub przy jej pomocy w dowolnej formie, w tym: konsultacji online, korespondencji na forum, korespondencji osobistej, konsultacji demo lub innych metod.</p>
</br>
<p><b>3. Ograniczenia w korzystaniu z Witryny.</b></p>

<p>Akceptując warunki niniejszej Umowy, rozumiesz i przyjmujesz do wiadomości, że:</p>

<p>3.1. Witryna ma prawo do ustalania limitów i ograniczeń w korzystaniu z Usług dla wszystkich lub poszczególnych Użytkowników, w tym: obecności / nieobecności określonych funkcji, sekcji i funkcji.</p>

<p>3.2. Użytkownik korzysta z Witryny na własne ryzyko. Usługi są świadczone "tak jak jest". Witryna nie ponosi żadnej odpowiedzialności, w tym za zgodność Witryny i świadczonych Usług z celami Użytkownika.</p>

<p>3.3. Witryna nie gwarantuje, że: Usługi są zgodne z wymaganiami Użytkownika w momencie przyjęcia Umowy, a następnie będą z nimi zgodne; Usługi będą świadczone w sposób ciągły, szybki, niezawodny i bezbłędny; wyniki, które można uzyskać za pomocą Witryny, będą dokładne i wiarygodne i mogą być wykorzystywane do dowolnych celów lub w dowolnym charakterze (na przykład do ustalenia i / lub potwierdzenia wszelkich faktów); jakość dowolnego produktu, usługi, informacji i Treści uzyskanych za pomocą Usług spełni oczekiwania Użytkownika.</p>

<p>3.4. Witryna nie ponosi odpowiedzialności za opóźnienia lub awarie w trakcie operacji, wynikające z działania siły wyższej, jak również wszelkie problemy z telekomunikacją, komputerem, urządzeniami elektrycznymi i innymi powiązanymi systemami, dla bezpieczeństwa prywatnych informacji, jeśli stały się własnością osób trzecich w wyniku włamania do witryny ( infekcja złośliwym oprogramowaniem), hakowanie technicznych środków dostępu do strony użytkownika lub w wyniku własnych działań Użytkownika.</p>

<p>3.5. Strona nie ponosi odpowiedzialności za działania powiązanych z nimi usług osób trzecich, systemów transferowych, banków, systemów płatności, systemów przesyłania wiadomości SMS i opóźnień związanych z ich pracą.</p>

<p>3.6. Wszelkie informacje i / lub materiały dostępne dla użytkownika korzystającego z Witryny, użytkownik może używać na własne ryzyko i ponosi wyłączną odpowiedzialność za możliwe konsekwencje użycia określonych informacji i / lub materiałów.</p>

<p>3.7. Ponieważ Strona jest na etapie stałych uzupełnień i aktualizacji, forma i charakter funkcjonalności Usług mogą się zmieniać od czasu do czasu bez wcześniejszego powiadamiania Użytkownika. Witryna może, w razie konieczności, według własnego uznania, wypowiedzieć (czasowo lub na stałe) świadczenie Usług (lub ich poszczególnych funkcji) wszystkim Użytkownikom w ogóle lub konkretnemu Użytkownikowi, w szczególności, bez uprzedzenia.</p>

<p>3.8. Witryna nie ponosi odpowiedzialności za jakiekolwiek szkody powstałe w wyniku korzystania z Usług Serwisu przez Użytkownika.</p>

<p>3.9. Witryna nie jest w żaden sposób powiązana z Treścią dostarczoną i / lub umieszczoną na niej przez Użytkowników i nie przeprowadza wyczerpującej kontroli treści, autentyczności i bezpieczeństwa takiej Treści lub jej składników, a także ich zgodności z wymogami obowiązującego prawa oraz tego, czy Użytkownicy posiadają niezbędną ilość praw do dystrybucji i / lub lub użyć.</p>

<p>3.10. Strona nie ponosi odpowiedzialności za dokładność informacji określonych w ankietach specjalistów, w tym informacji o wykształceniu i autentyczności kopii dokumentów edukacyjnych umieszczonych przez nich w kwestionariuszu. Strona jest uprawniona (ale nie zobowiązana) do weryfikacji kopii dokumentów dostarczonych przez specjalistę pod kątem zgodności z deklarowanym przez niego stanowiskiem zawodowym, jednak wynik takiej weryfikacji nie może być uważany za wyczerpujący i służy jako wskazówka dla wszelkich działań lub decyzji Użytkownika.</p>

<p>3.11. Użytkownik ponosi wyłączną odpowiedzialność za zgodność treści Zawartości zawartej przez Użytkownika z wymaganiami obowiązującego prawa, w tym odpowiedzialności wobec stron trzecich w przypadkach, gdy umieszczenie takiej Treści przez Użytkownika lub jego treści narusza prawa i uzasadnione interesy osób trzecich, w tym autorskich praw osobistych, innych intelektualnych praw stron trzecich. osoby i / lub wkracza w ich niematerialne korzyści.</p>

<p>3.12. Użytkownik wyraża zgodę na to, że Witryna nie jest zobowiązana do przeprowadzenia wstępnej kontroli Zawartości jakiegokolwiek rodzaju opublikowanej i / lub rozpowszechnianej przez Użytkowników za pośrednictwem jej Usług, a także, że Strona ma prawo (ale nie obowiązek) według własnego uznania do odmowy Użytkownikowi umieszczenia i / lub dystrybucja takiej Treści lub usunięcie jakiejkolwiek Treści. Użytkownik przyjmuje do wiadomości i zgadza się, że musi dokonać niezależnej oceny wszystkich ryzyk związanych z umieszczeniem i dystrybucją takiej Treści, w tym oceną wiarygodności, kompletności lub przydatności takiej treści.</p>

<p>3.13. W szczególności, korzystając z Witryny, Użytkownik nie może:</p>

<p>3.13.1. przesyłać, wysyłać, transmitować lub w jakikolwiek inny sposób publikować i / lub rozpowszechniać informacje niezgodne z prawem, szkodliwe, zniesławiające, obrażające moralność, demonstrujące (lub propagandowe) przemoc i okrucieństwo, naruszające prawa własności intelektualnej, promujące nienawiść i / lub dyskryminujące ludzi cechy rasowe, etniczne, seksualne, religijne, społeczne, zawiera obelgi wobec jakiejkolwiek osoby lub organizacji, zawiera elementy (lub jest propagandą) pornografii, dziecięcy erotyzm, jest reklamą (lub propagandą) usług o charakterze seksualnym (w tym pod pozorem innych usług), wyjaśnia procedurę wytwarzania, używania lub innego użycia substancji odurzających lub ich analogów, materiałów wybuchowych lub innej broni, w celu wykonywania działań sprzecznych z prawem RF;</p>

<p>3.13.2. naruszać praw osób trzecich, w tym nieletnich, i / lub szkodzić im w jakiejkolwiek formie;</p>

<p>3.13.3. podszywać się pod inną osobę lub przedstawiciela organizacji i / lub społeczności bez wystarczających uprawnień, w tym pracowników Strony, a także stosować wszelkie inne formy i metody nielegalnej reprezentacji innych osób w Internecie;</p>

<p>3.13.4. przesyłać, wysyłać, transmitować lub w jakikolwiek inny sposób publikować i / lub rozpowszechniać Treści, w przypadku braku praw do takich działań zgodnie z prawem lub stosunkiem umownym;</p>

<p>3.13.5. nieuprawnione gromadzenie i przechowywanie danych osobowych innych osób;</p>

<p>3.13.6. zakłócić normalne działanie Witryny lub jej Usług;</p>

<p>3.13.7. zamieszczać linki do zasobów internetowych, których treść jest sprzeczna z obowiązującym ustawodawstwem Federacji Rosyjskiej;</p>

<p>3.13.8. promowanie działań mających na celu naruszenie ograniczeń i zakazów nałożonych przez umowę;</p>

<p>3.14. W przypadku, gdy Strona zostanie pociągnięta do odpowiedzialności lub nałożona zostanie na nią kara w związku z naruszeniem praw i / lub interesów osób trzecich dokonanych przez Użytkownika, a także zakazów lub ograniczeń ustanowionych przez prawo, taki Użytkownik jest zobowiązany do pełnego zrekompensowania strat na Stronie.</p>

<p>3.15. W przypadku naruszenia warunków niniejszej Umowy, jej aplikacji, warunków korzystania z niektórych Usług serwisu lub wymagań ustawodawstwa Federacji Rosyjskiej, Witryna ma prawo zablokować (tymczasowo lub na stałe) lub usunąć konto użytkownika i odmówić dostępu do niektórych Usług oraz usunąć wszelkie informacje określone przez Użytkownika na Koncie osobistym lub treści publikowane przez niego bez powiadomienia.</p>

<p>3.16. Witryna zastrzega sobie prawo do podjęcia działań w celu zablokowania dostępu Użytkownika do Witryny lub jej poszczególnych Usług, a także do usunięcia Treści bez uprzedzenia i wyjaśnień.</p>

<p>3.17. Witryna nie ponosi odpowiedzialności wobec Użytkownika ani osób trzecich za zerwanie dostępu do Witryny w przypadku naruszenia przez Użytkownika któregokolwiek z postanowień niniejszej Umowy lub innego dokumentu zawierającego warunki korzystania z Witryny.</p>
</br>
<p><b>4. Powiadomienia.</b></p>

<p>4.1. Witryna ma prawo wysłać Użytkownika na adres e-mail z informacją adresową (zwaną dalej "Powiadomieniami") o ważnych wydarzeniach, powiadomieniach o pojawieniu się nowych wiadomości, treści lub odpowiedzi adresowanych lub w jakiś sposób związanych z Użytkownikiem.</p>

<p>4.2. Witryna internetowa, według własnego uznania, jest uprawniona do korzystania z Powiadomień w celu dystrybucji ogłoszeń dotyczących własnych usług i produktów (usług) stron trzecich.</p>

<p>4.3. Użytkownik ma prawo do niezależnego odmawiania otrzymywania określonych typów Powiadomień poprzez dokonywanie odpowiednich zapisów na Koncie osobistym.</p>
</br>
<p><b>5. Inne postanowienia.</b></p>

<p>5.1. Niniejsza Umowa podlega i jest interpretowana zgodnie z ustawodawstwem Federacji Rosyjskiej. Kwestie nieuregulowane niniejszą Umową będą rozstrzygane zgodnie z ustawodawstwem Federacji Rosyjskiej. Wszelkie ewentualne spory wynikające ze stosunków regulowanych niniejszą Umową będą rozstrzygane w sposób przewidziany przez obowiązujące ustawodawstwo Federacji Rosyjskiej, zgodnie z normami rosyjskiego prawa.</p>

<p>5.2. Jeśli z tego czy innego powodu jedno lub więcej postanowień niniejszej Umowy zostanie uznane za nieważne lub niewykonalne, nie wpłynie to na ważność lub zastosowanie pozostałych postanowień Umowy.</p>

<p>5.3. Informacje zamieszczone w Witrynie nie powinny być interpretowane jako zmiana w niniejszej Umowie.</p>

<p>5.4. Żadne z postanowień Umowy nie może być rozumiane jako ustanowienie pomiędzy Użytkownikiem a Stroną relacji agencyjnych, stosunków partnerskich, relacji typu joint venture, osobistych stosunków pracy lub innych relacji, które nie zostały wyraźnie przewidziane w Umowie.</p>
</br>
<p><b>6. Rozwiązywanie sporów.</b></p>

<p>6.1. W przypadku sporów lub sporów między Stronami niniejszej Umowy warunkiem wstępnym przed wniesieniem odwołania do sądu jest złożenie wniosku (pisemna propozycja dobrowolnego rozstrzygnięcia sporu).</p>

<p>6.2. Odbiorca roszczenia, w terminie 10 dni kalendarzowych od daty jego otrzymania, powiadamia na piśmie powoda o wynikach rozpatrzenia roszczenia.</p>

<p>6.3. Strony uzgadniają jurysdykcję sporu w miejscu administratora strony. Spory rozpatrywane są zgodnie z ustawodawstwem Federacji Rosyjskiej. Jeżeli nie jest możliwe dobrowolne rozstrzygnięcie sporu, każda ze stron może zwrócić się do Sądu Okręgowego Takhtamukaysky, który znajduje się pod adresem: Federacja Rosyjska, Republika Adygei, Takhtamukay aul, Kh. M. Sovmena street, 14, w celu ochrony ich praw przyznanych im przez obowiązujące rosyjskie ustawodawstwo Federacja.</p>
 
			</table>
		
	
			
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