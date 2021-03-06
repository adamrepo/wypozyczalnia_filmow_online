<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT uzytkownicy.* FROM uzytkownicy WHERE uzytkownicy.login = '%s' AND haslo = '%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();

				$_SESSION['zalogowany'] = true;
				$_SESSION['id_uzytkownika'] = $wiersz['id_uzytkownika'];
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['email'] = $wiersz['email'];
					
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: home.php');
			}
			else 
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
			}
			
		}
		
		$polaczenie->close();
	}
	
?>