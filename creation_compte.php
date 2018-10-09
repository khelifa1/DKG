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
			return (false);
		}
		if(!(isset($_POST["prenom"])) || $_POST["prenom"] == '')
		{
			return (false);
		}
		if(!(isset($_POST["pseudo"])) || $_POST["pseudo"] == '')
		{
			return (false);
		}
		if(!(isset($_POST["mdp"])) || $_POST["mdp"] == '')
		{
			return (false);
		}
		if(!(isset($_POST["ville"])) || $_POST["ville"] == '')
		{
			return (false);
		}
		if(!(isset($_POST["cp"])) || $_POST["cp"] == '')
		{
			return (false);
		}
		return (true);
	}
?>
<?php

	if (!verif())
	{
		header('location: inscription.php?error=1');
		exit();
	}


?>ma bite
<?php $dbh = null;//deco de la base de donnee ?>