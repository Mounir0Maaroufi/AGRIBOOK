<?php
	require_once('session.php');
?>

<?php

	require_once('connexion.php');
	
	$sujet=$_POST['sujet'];
	
	
	$requete="insert into sujet(NOM_Sujet) values(?)";	
			
	$param=array($sujet);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
		
	header("location:sujet.php");
	
?>