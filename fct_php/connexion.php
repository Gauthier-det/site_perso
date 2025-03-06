<?php
	include_once "fct_utiles.php";
	include_once "param_connexion.php";
	$db = $dbMySQL;
	$db_username = $db_usernameMySQL;
	$db_password = $db_passwordMySQL;
	try{
		$conn = new PDO($db,$db_username,$db_password);
		
	}
	catch (PDOException $erreur)
	{
		echo $erreur->getMessage();
		echo "Connexion échouée";
	}
?>
