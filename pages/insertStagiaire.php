<?php
	require_once('session.php');
?>

<?php

	require_once('connexion.php');
	
	$NOM=$_POST['NOM'];
	$PRENOM=$_POST['PRENOM'];
	$DATE=$_POST['DATE'];
	$ADRESSE=$_POST['ADRESSE'];
	$TELEPHONE=$_POST['TELEPHONE'];
	$ETABLISSMENT=$_POST['ETABLISSMENT'];
	$NIVEAU=$_POST['NIVEAU'];
	$ID_FILIERE=$_POST['ID_FILIERE'];
	$TYPE=$_POST['TYPE'];
	$SUJET=$_POST['SUJET'];
	$PERIODE=$_POST['PERIODE'];
	$DATEPERIODE1=$_POST['DATEPERIODE1'];
	$DATEPERIODE2=$_POST['DATEPERIODE2'];
	$PAIEMENT=$_POST['PAIEMENT'];
	$MONTON=$_POST['MONTON'];
	$ENCADREUR=$_POST['ENCADREUR'];
	$autre=$_POST['AUTRE1'];

    if($MONTON=="")$MONTON = 0;


	$requete="insert into stagiaire values(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
	$resultat = $con->prepare($requete);			
	$param=array($NOM,$PRENOM,$DATE,$ADRESSE,$TELEPHONE,$ETABLISSMENT,$NIVEAU,$ID_FILIERE,$TYPE,$SUJET,$PERIODE,$DATEPERIODE1,$DATEPERIODE2,$PAIEMENT,$MONTON,$ENCADREUR);			
	$resultat->execute($param);	

    if($autre != ""){
    $requete="insert into etablissment values(NULL, ?)";	
	$resultat = $con->prepare($requete);			
	$param=array($autre);			
	$resultat->execute($param);

    }



		
	header("location:stagiaires.php");
	
?>