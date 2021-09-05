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
				$search = $_POST['search'];
				require_once "connect.php";
				$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
				
				$wyniki_wyszukiwania = $polaczenie->query("SELECT filmy.tytul, filmy.rok, rezyserzy.nazwa_rezysera, gatunki1.nazwa_gatunku AS gatunek1, gatunki2.nazwa_gatunku AS gatunek2, gatunki3.nazwa_gatunku AS gatunek3, kraje_produkcji1.kraj AS kraj1, kraje_produkcji2.kraj AS kraj2, kraje_produkcji3.kraj AS kraj3, filmy.liczba_wypozyczen, filmy.liczba_ocen, filmy.srednia_ocen, stawki_cenowe.wartosc 
				FROM filmy 
				LEFT JOIN rezyserzy ON filmy.rezyser = rezyserzy.id_rezysera 
				LEFT JOIN gatunki AS gatunki1 ON filmy.gatunek1 = gatunki1.id_gatunku 
				LEFT JOIN gatunki AS gatunki2 ON filmy.gatunek2 = gatunki2.id_gatunku 
				LEFT JOIN gatunki AS gatunki3 ON filmy.gatunek3 = gatunki3.id_gatunku 
				LEFT JOIN kraje_produkcji AS kraje_produkcji1 ON filmy.kraj1 = kraje_produkcji1.kod_kraju 
				LEFT JOIN kraje_produkcji AS kraje_produkcji2 ON filmy.kraj2 = kraje_produkcji2.kod_kraju 
				LEFT JOIN kraje_produkcji AS kraje_produkcji3 ON filmy.kraj3 = kraje_produkcji3.kod_kraju 
				LEFT JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny WHERE rezyserzy.nazwa_rezysera LIKE CONCAT ('%', '$search', '%') OR
				filmy.tytul LIKE CONCAT ('%', '$search', '%') OR
				filmy.opis LIKE CONCAT ('%', '$search', '%')");

				echo "<div class='title'>";
					echo "Wyniki wyszukiwania";
				echo "</div>";	
				while ($r = $wyniki_wyszukiwania->fetch_assoc())  
				{
					echo "<div class='display'>";
						echo "<div class='display1'>";
							$tytul = $r['tytul'];
							echo "<strong>".$r['tytul']."</strong>".' | '.$r["rok"].'</br>';
							echo $r["nazwa_rezysera"].'</br>';
							echo $r["gatunek1"];
							if ($r["gatunek2"]!=NULL)
							{
								echo ' | '.$r["gatunek2"];
							}
							if ($r["gatunek3"]!=NULL)
							{
								echo ' | '.$r["gatunek3"];
							}
							echo '</br>'.$r["kraj1"];
							if ($r["kraj2"]!=NULL)
							{
								echo ' | '.$r["kraj2"];
							}
							if ($r["kraj3"]!=NULL)
							{
								echo ' | '.$r["kraj3"];
							}
						echo "</div>";						
						echo "<div class='display2'>";
							echo 'Liczba ocen: '.$r['liczba_ocen'].'</br>';
							echo 'Liczba wypożyczeń: '.$r['liczba_wypozyczen'].'</br>';
							$r['srednia_ocen'] = round($r['srednia_ocen'],2);
							echo 'Średnia ocen: '.$r["srednia_ocen"].'</br>';
							echo 'Cena: '.$r['wartosc'].' zł'.'</br>';
						echo "</div>";							
						echo "<div class='display3'>";
						$tytul = $r['tytul'];						
							echo "<form action = 'wypozycz.php' method='post'>";
								echo "<input type='hidden' name='wypozycz' value='$tytul' />";							
								echo "<input type='submit' value='Wypożycz'/>";	
							echo "</form>";
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