<?php
	// XXX : TP2 PHP Exo1 et Exo2
	// préparation SAE 2.456 : programme principal
	// connexion_oracle_etu.php 29/05/2021
	
	include_once "fct_utiles.php";
	include_once "param_connexion.php";
	echo '<meta charset="utf-8"> ';
	// décommenter en fonction du serveur de BDD utilisé
	//define ("MOD_BDD","MYSQL");
	define ("MOD_BDD","MYSQL");

	if (MOD_BDD == "MYSQL")
	{
		$db_username = $db_usernameMySQL;		
		$db_password = $db_passwordMySQL;
		$db = $dbMySQL;
	}
	else
	{
		$db_username = $db_usernameOracle;		
		$db_password = $db_passwordOracle;	
		$db = $dbOracle;
	}
	
	$conn = OuvrirConnexionPDO($db,$db_username,$db_password);

	function insererDonnee($c){
		$sql = "INSERT INTO bidon VALUES (25,'Valise','jaune')";
		afficherObj($sql);
		//$res = // compléter
		echo "Résultats de la requête " ,$res . "<br/>";
		$sql = "INSERT INTO bidon VALUES (28,'Valise','rouge')";
		afficherObj($sql);
		//$res = // compléter
		echo "Résultats de la requête ",$res . "<br/>";
	}
	
	function corrigerDonnees($c){
		$sql = "update bidon set b='trousse' where b='Valise'";
		afficherObj($sql);
		//$res = // compléter
		echo "Résultats de la requête " . $res . "<br/>";
	}

	function lireDonnees($c, $sql)
	{
		LireDonneesPDO2($c, $sql, $donnee);
		return $donnee;
	}
	
	function afficherObj($obj){
		echo "<PRE>";
		print_r($obj);
		echo "</PRE>";
	}
 ?>
