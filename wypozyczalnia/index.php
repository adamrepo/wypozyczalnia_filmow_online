<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: home.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wypożyczalnia filmów online</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>

	<div id="container">
		<a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
		<form action="zaloguj.php" method="post">			
			<input type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" name="login"/>			
			<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" name="haslo" />
			<?php
				if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
			?>
			<input type="submit" value="Zaloguj się"/>		
		</form>
	</div>

</body>
</html>