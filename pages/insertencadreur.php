<?php
	require_once('session.php');
?>

<?php

	require_once('connexion.php');
	
	$nom=$_POST['NOM'];
	$prenom=$_POST['PRENOM'];
	
	
	$requete="insert into ENCADREUR(NOM,PRENOM) values(?,?)";	
			
	$param=array($nom,$prenom);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
		
	header("location:Encadreurs.php");
	
?>