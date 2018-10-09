<?php
	session_start();

	$host = "localhost";
	$dbname = "workshop";
	$id_db = "root";
	$mdp_db = "";

	try 
	{
	    // create connexion
		$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $id_db, $mdp_db);    
	}

	catch (PDOException $e) {
	     print "Erreur !: " . $e->getMessage() . "<br/>";
	     die();
	}
	
	function verif()
	{
		if(!(isset($_POST["nom"])) || $_POST["nom"] == '')
		{
			header('location: inscription.php?error=nom');
			exit();;
		}
		if(!(isset($_POST["prenom"])) || $_POST["prenom"] == '')
		{
			header('location: inscription.php?error=prenom');
			exit();;
		}
		if(!(isset($_POST["pseudo"])) || $_POST["pseudo"] == '')
		{
			header('location: inscription.php?error=pseudo');
			exit();;
		}
		if(!(isset($_POST["mdp"])) || $_POST["mdp"] == '')
		{
			header('location: inscription.php?error=mdp');
			exit();;
		}
		if(!(isset($_POST["ville"])) || $_POST["ville"] == '')
		{
			header('location: inscription.php?error=1');
			exit();;
		}
		if(!(isset($_POST["cp"])) || $_POST["cp"] == '')
		{
			header('location: inscription.php?error=1');
			exit();;
		}
		if(!(isset($_POST["telephone"])) || $_POST["telephone"] == 0
		{
			header('location: inscription.php?error=1');
			exit();;
		}
		return (true);
	}
?>
<?php

	if (!verif())
	{
		
	}


?>ma bite
<?php $dbh = null;//deco de la base de donnee ?>