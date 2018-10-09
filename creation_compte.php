<?php
	session_start();

	$host = "localhost";
	$dbname = "Workshop";
	$id_db = "root";
	$mdp_db = "";

	try 
	{
	    // create connexion
		$dbh = new PDO('mysql:host='+$host+';dbname='+dbname, "", "");
		    
	}
	 catch (PDOException $e) {
	     print "Erreur !: " . $e->getMessage() . "<br/>";
	     die();
	}
	
?>



<?php $dbh = null;//deco de la base de donnee ?>