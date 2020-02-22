<?php
	require_once('session.php');
?>

<?php
	require_once('connexion.php');
	
	$id=$_GET['ID'];

	$requete="DELETE FROM Encadreur where ID=?";			
	$param=array($id);	
	$resultat = $con->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:Encadreurs.php");
	
?>