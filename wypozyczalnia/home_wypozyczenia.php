<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Wypożyczalnia filmów online</title>
	
	<link href="style_homepage.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
	
	<div class="wrapper">
		<div class="header">	
			<div class="logo">
				<span style="color: #4A5CFF">wypozyczalnia</span>filmow.com
				<div style="clear:both;"></div>
			</div>
			<div class="search">
				<form action="home_search.php" method="post">			
					<input type="text" placeholder="Szukaj filmów lub reżysera" onfocus="this.placeholder=''" onblur="this.placeholder='Szukaj filmów'" name="search"/>
					<input type="submit" value="Szukaj"/>
					<div style="clear:both;"></div>		
				</form>
			</div>
		</div>
		<div class="nav">
			<ol>
				<li><a href="home.php">Strona główna</a></li>
				<li><a href="home_baza_filmow.php">Baza filmów</a></li>
				<li><a href="home_baza_rezyserow.php">Baza reżyserów</a></li>
				<li><a href="home_informacje.php">Profil</a></li>
				<li><a href="home_wypozyczenia.php">Wypożyczenia</a></li>
				<li><a href="home_oceny.php">Oceny</a></li>
				<li><a href="logout.php">Wyloguj</a></li>
			</ol>
		
		</div>
		
		<div class="content">
			
		<?php
			$id_uzytkownika = $_SESSION['id_uzytkownika'];
			require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			
			$wyniki_wyszukiwania = $polaczenie->query("SELECT filmy.tytul, stawki_cenowe.wartosc, wypozyczenia.data_wypozyczenia, wypozyczenia.data_wygasniecia FROM wypozyczenia JOIN filmy ON wypozyczenia.id_filmu = filmy.id_filmu JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny WHERE wypozyczenia.id_uzytkownika = $id_uzytkownika ORDER BY wypozyczenia.data_wypozyczenia DESC");
				
			echo "<div class='title'>";
				echo "Twoje wypożyczenia od najnowszych";
			echo "</div>";	
			while ($r = $wyniki_wyszukiwania->fetch_assoc())  
			{
				echo "<div class='display'>";
					echo "<div class='display1'>";
						$tytul = $r['tytul'];
						echo "<strong>".$r['tytul']."</strong>".'</br>';
						echo 'Cena: '.$r['wartosc'].' zł'.'</br>';						
						echo 'Data wypożyczenia: '.$r['data_wypozyczenia'].'</br>';
						echo 'Data wygaśnięcia: '.$r['data_wygasniecia'];						
					echo "</div>";						
				echo "</div>";
			}		
			
			$polaczenie->close();
		?>	
				
		</div>
	</div>
	
	<script src="jquery-1.11.3.min.js"></script>
	
	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>

</body>
</html>