<?php

	session_start();
	
	if ((!isset($_POST['wypozycz'])))
	{
		header('Location: index.php');
		exit();
	}


	require_once "connect.php";

	$id_uzytkownika = $_SESSION['id_uzytkownika'];
	$tytul = $_POST['wypozycz'];
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	$wynik = $polaczenie->query("select id_filmu from filmy where tytul = '$tytul'");

	$id_filmu = $wynik->fetch_assoc();
	$id_filmu = implode($id_filmu);

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);	

	$polaczenie->query("INSERT INTO wypozyczenia (id_uzytkownika, id_filmu, data_wypozyczenia, data_wygasniecia)
	VALUES ('$id_uzytkownika', '$id_filmu', now(), ADDDATE(now(), INTERVAL 30 DAY))");

	header('Location: home_wypozyczenia.php');	
	$polaczenie->close();
	
?>