<?php
	require_once('session.php');
?>

<?php

	require_once('connexion.php');
	
	$nom=$_POST['NOM_FILIERE'];
	
	$requete="insert into FILIERE(NOM_FILIERE) values(?)";	
			
	$param=array($nom,);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
		
	header("location:filieres.php");
	
?>