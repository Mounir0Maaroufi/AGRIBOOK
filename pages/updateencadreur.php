<?php
	require_once('session.php');
?>

<?php
	require_once('connexion.php');
	
	$id=$_POST['ID'];
	$nom=$_POST['NOM'];
	$prenom=$_POST['PRENOM'];
	
	$requete="UPDATE Encadreur SET NOM=? PRENOM=? where id=?";
	$param=array($nom,$id,$prenom);		
	
	$resultat = $con->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:Encadreurs.php");

?>