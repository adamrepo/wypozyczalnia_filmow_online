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
			</br>
			<form method="post">
				<label for="gatunek">Gatunek:</label>
				<select name="gatunek" id="gatunek">
					<option value="0" selected>Wszystkie</option>
					<option value="1">Akcja</option>
					<option value="2">Animacja</option>
					<option value="3">Biograficzny</option>
					<option value="4">Dramat</option>
					<option value="5">Dramat historyczny</option>
					<option value="6">Dramat obyczajowy</option>
					<option value="7">Dramat sądowy</option>
					<option value="8">Familijny</option>
					<option value="9">Fantasy</option>
					<option value="10">Gangsterski</option>
					<option value="11">Horror</option>
					<option value="12">Katastroficzny</option>
					<option value="13">Komedia</option>
					<option value="14">Komedia kryminalna</option>
					<option value="15">Kostiumowy</option>
					<option value="16">Kryminał</option>
					<option value="17">Melodramat</option>
					<option value="18">Muzyczny</option>
					<option value="19">Przygodowy</option>
					<option value="20">Psychologiczny</option>
					<option value="21">Sci-Fi</option>
					<option value="22">Sensacyjny</option>
					<option value="23">Surrealistyczny</option>
					<option value="24">Thriller</option>
					<option value="25">Western</option>
				</select>
				
				<label for="kraj">Kraj:</label>
				<select name="kraj" id="kraj">
					<option value="0" selected>Wszystkie</option>
					<option value="AUS">Australia</option>
					<option value="CAN">Kanada</option>
					<option value="CZE">Czechy</option>
					<option value="DEU">Niemcy</option>
					<option value="ESP">Hiszpania</option>
					<option value="FRA">Francja</option>
					<option value="GBR">Wielka Brytania</option>
					<option value="HKG">Hongkong</option>
					<option value="ITA">Włochy</option>
					<option value="NOR">Norwegia</option>
					<option value="NZL">Nowa Zelandia</option>
					<option value="POL">Polska</option>
					<option value="SWE">Szwecja</option>
					<option value="USA">Stany Zjednoczone</option>		  
				</select>

				<label for="od_roku">Od roku:</label>
				<select name="od_roku" id="od_roku">
					<option value="1950" selected>Wszystkie</option>
					<option value="1950">1950</option>
					<option value="1951">1951</option>
					<option value="1952">1952</option>
					<option value="1953">1953</option>
					<option value="1954">1954</option>
					<option value="1955">1955</option>
					<option value="1956">1956</option>
					<option value="1957">1957</option>
					<option value="1958">1958</option>
					<option value="1959">1959</option>
					<option value="1960">1960</option>
					<option value="1961">1961</option>
					<option value="1962">1962</option>
					<option value="1963">1963</option>
					<option value="1964">1964</option>
					<option value="1965">1965</option>
					<option value="1966">1966</option>
					<option value="1967">1967</option>
					<option value="1968">1968</option>
					<option value="1969">1969</option>
					<option value="1970">1970</option>
					<option value="1971">1971</option>
					<option value="1972">1972</option>
					<option value="1973">1973</option>
					<option value="1974">1974</option>
					<option value="1975">1975</option>
					<option value="1976">1976</option>
					<option value="1977">1977</option>
					<option value="1978">1978</option>
					<option value="1979">1979</option>
					<option value="1980">1980</option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
				</select>

				<label for="do_roku">Do roku:</label>
				<select name="do_roku" id="do_roku">
					<option value="2021" selected>Wszystkie</option>
					<option value="1950">1950</option>
					<option value="1951">1951</option>
					<option value="1952">1952</option>
					<option value="1953">1953</option>
					<option value="1954">1954</option>
					<option value="1955">1955</option>
					<option value="1956">1956</option>
					<option value="1957">1957</option>
					<option value="1958">1958</option>
					<option value="1959">1959</option>
					<option value="1960">1960</option>
					<option value="1961">1961</option>
					<option value="1962">1962</option>
					<option value="1963">1963</option>
					<option value="1964">1964</option>
					<option value="1965">1965</option>
					<option value="1966">1966</option>
					<option value="1967">1967</option>
					<option value="1968">1968</option>
					<option value="1969">1969</option>
					<option value="1970">1970</option>
					<option value="1971">1971</option>
					<option value="1972">1972</option>
					<option value="1973">1973</option>
					<option value="1974">1974</option>
					<option value="1975">1975</option>
					<option value="1976">1976</option>
					<option value="1977">1977</option>
					<option value="1978">1978</option>
					<option value="1979">1979</option>
					<option value="1980">1980</option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
				</select>			

				<label for="sort">Sortuj wg:</label>
				<select name="sort" id="sort">
					<option value="filmy.srednia_ocen" selected>Średniej ocen</option>
					<option value="filmy.liczba_wypozyczen">Popularności</option>
					<option value="filmy.liczba_ocen">Liczby ocen</option>
					<option value="filmy.rok">Roku produkcji</option>		  
				</select>
				
				<label for="rosnaco"></label>
				<select name="rosnaco" id="rosnaco">
					<option value="asc">Rosnąco</option>
					<option value="desc" selected>Malejąco</option>	  
				</select>
				</br>
				<input type="submit" value="Szukaj"/>
				
			</form>		
			
			<?php
			
				$gatunek = 0;
				$kraj = 0;
				$rok_od = 1950;
				$rok_do = 2021;
				$sort = "filmy.srednia_ocen";
				$rosnaco = "desc";				

				if(isset($_POST['gatunek']))
				{
					$gatunek = $_POST['gatunek'];
					$kraj = $_POST['kraj'];
					$rok_od = $_POST['od_roku'];
					$rok_do = $_POST['do_roku'];
					$sort = $_POST['sort'];
					$rosnaco = $_POST['rosnaco'];
				}
				
				unset($_POST['gatunek']);
				unset($_POST['kraj']);
				unset($_POST['od_roku']);
				unset($_POST['do_roku']);
				unset($_POST['sort']);
				unset($_POST['rosnaco']);

				require_once "connect.php";
								
				if($gatunek == 0 && $kraj != 0)
				{	
					$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
					$wynik = @$polaczenie->query("SELECT filmy.tytul, filmy.rok, rezyserzy.nazwa_rezysera, gatunki1.nazwa_gatunku AS gatunek1, gatunki2.nazwa_gatunku AS gatunek2, gatunki3.nazwa_gatunku AS gatunek3, kraje_produkcji1.kraj AS kraj1, kraje_produkcji2.kraj AS kraj2, kraje_produkcji3.kraj AS kraj3, filmy.liczba_wypozyczen, filmy.liczba_ocen, filmy.srednia_ocen, stawki_cenowe.wartosc 
					FROM filmy 
					LEFT JOIN rezyserzy ON filmy.rezyser = rezyserzy.id_rezysera 
					LEFT JOIN gatunki AS gatunki1 ON filmy.gatunek1 = gatunki1.id_gatunku 
					LEFT JOIN gatunki AS gatunki2 ON filmy.gatunek2 = gatunki2.id_gatunku 
					LEFT JOIN gatunki AS gatunki3 ON filmy.gatunek3 = gatunki3.id_gatunku 
					LEFT JOIN kraje_produkcji AS kraje_produkcji1 ON filmy.kraj1 = kraje_produkcji1.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji2 ON filmy.kraj2 = kraje_produkcji2.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji3 ON filmy.kraj3 = kraje_produkcji3.kod_kraju 
					LEFT JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny 
					WHERE 
					(filmy.kraj1 = '$kraj' OR filmy.kraj2 = '$kraj' OR filmy.kraj3 = '$kraj') 
					and
					(filmy.rok >= $rok_od and filmy.rok <= $rok_do) 
					ORDER BY $sort $rosnaco");

					echo "<div class='title'>";
						echo "Wyniki wyszukiwania";
					echo "</div>";	
					while ($r = $wynik->fetch_assoc())  
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
				}
				
				if($gatunek != 0 && $kraj == 0)
				{	
					$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
					$wynik = @$polaczenie->query("SELECT filmy.tytul, filmy.rok, rezyserzy.nazwa_rezysera, gatunki1.nazwa_gatunku AS gatunek1, gatunki2.nazwa_gatunku AS gatunek2, gatunki3.nazwa_gatunku AS gatunek3, kraje_produkcji1.kraj AS kraj1, kraje_produkcji2.kraj AS kraj2, kraje_produkcji3.kraj AS kraj3, filmy.liczba_wypozyczen, filmy.liczba_ocen, filmy.srednia_ocen, stawki_cenowe.wartosc 
					FROM filmy 
					LEFT JOIN rezyserzy ON filmy.rezyser = rezyserzy.id_rezysera 
					LEFT JOIN gatunki AS gatunki1 ON filmy.gatunek1 = gatunki1.id_gatunku 
					LEFT JOIN gatunki AS gatunki2 ON filmy.gatunek2 = gatunki2.id_gatunku 
					LEFT JOIN gatunki AS gatunki3 ON filmy.gatunek3 = gatunki3.id_gatunku 
					LEFT JOIN kraje_produkcji AS kraje_produkcji1 ON filmy.kraj1 = kraje_produkcji1.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji2 ON filmy.kraj2 = kraje_produkcji2.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji3 ON filmy.kraj3 = kraje_produkcji3.kod_kraju 
					LEFT JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny 
					WHERE 
					(filmy.gatunek1 = $gatunek OR filmy.gatunek2 = $gatunek OR filmy.gatunek3 = $gatunek) 
					and
					(filmy.rok >= $rok_od and filmy.rok <= $rok_do) 
					ORDER BY $sort $rosnaco");

					echo "<div class='title'>";
						echo "Wyniki wyszukiwania";
					echo "</div>";	
					while ($r = $wynik->fetch_assoc())  
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
				}
				
				if($gatunek == 0 && $kraj == 0)
				{	
					$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
					$wynik = @$polaczenie->query("SELECT filmy.tytul, filmy.rok, rezyserzy.nazwa_rezysera, gatunki1.nazwa_gatunku AS gatunek1, gatunki2.nazwa_gatunku AS gatunek2, gatunki3.nazwa_gatunku AS gatunek3, kraje_produkcji1.kraj AS kraj1, kraje_produkcji2.kraj AS kraj2, kraje_produkcji3.kraj AS kraj3, filmy.liczba_wypozyczen, filmy.liczba_ocen, filmy.srednia_ocen, stawki_cenowe.wartosc 
					FROM filmy 
					LEFT JOIN rezyserzy ON filmy.rezyser = rezyserzy.id_rezysera 
					LEFT JOIN gatunki AS gatunki1 ON filmy.gatunek1 = gatunki1.id_gatunku 
					LEFT JOIN gatunki AS gatunki2 ON filmy.gatunek2 = gatunki2.id_gatunku 
					LEFT JOIN gatunki AS gatunki3 ON filmy.gatunek3 = gatunki3.id_gatunku 
					LEFT JOIN kraje_produkcji AS kraje_produkcji1 ON filmy.kraj1 = kraje_produkcji1.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji2 ON filmy.kraj2 = kraje_produkcji2.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji3 ON filmy.kraj3 = kraje_produkcji3.kod_kraju 
					LEFT JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny 
					WHERE 
					(filmy.rok >= $rok_od and filmy.rok <= $rok_do) 
					ORDER BY $sort $rosnaco");

					echo "<div class='title'>";
						echo "Wyniki wyszukiwania";
					echo "</div>";	
					while ($r = $wynik->fetch_assoc())  
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
				}
				
				if($gatunek != 0 && $kraj != 0)
				{	
					$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
					$wynik = @$polaczenie->query("SELECT filmy.tytul, filmy.rok, rezyserzy.nazwa_rezysera, gatunki1.nazwa_gatunku AS gatunek1, gatunki2.nazwa_gatunku AS gatunek2, gatunki3.nazwa_gatunku AS gatunek3, kraje_produkcji1.kraj AS kraj1, kraje_produkcji2.kraj AS kraj2, kraje_produkcji3.kraj AS kraj3, filmy.liczba_wypozyczen, filmy.liczba_ocen, filmy.srednia_ocen, stawki_cenowe.wartosc 
					FROM filmy 
					LEFT JOIN rezyserzy ON filmy.rezyser = rezyserzy.id_rezysera 
					LEFT JOIN gatunki AS gatunki1 ON filmy.gatunek1 = gatunki1.id_gatunku 
					LEFT JOIN gatunki AS gatunki2 ON filmy.gatunek2 = gatunki2.id_gatunku 
					LEFT JOIN gatunki AS gatunki3 ON filmy.gatunek3 = gatunki3.id_gatunku 
					LEFT JOIN kraje_produkcji AS kraje_produkcji1 ON filmy.kraj1 = kraje_produkcji1.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji2 ON filmy.kraj2 = kraje_produkcji2.kod_kraju 
					LEFT JOIN kraje_produkcji AS kraje_produkcji3 ON filmy.kraj3 = kraje_produkcji3.kod_kraju 
					LEFT JOIN stawki_cenowe ON filmy.id_ceny = stawki_cenowe.id_ceny 
					WHERE 
					(filmy.gatunek1 = $gatunek OR filmy.gatunek2 = $gatunek OR filmy.gatunek3 = $gatunek) 
					and
					(filmy.kraj1 = '$kraj' OR filmy.kraj2 = '$kraj' OR filmy.kraj3 = '$kraj') 
					and					
					(filmy.rok >= $rok_od and filmy.rok <= $rok_do) 
					ORDER BY $sort $rosnaco");

					echo "<div class='title'>";
						echo "Wyniki wyszukiwania";
					echo "</div>";	
					while ($r = $wynik->fetch_assoc())  
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
				}	
				
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