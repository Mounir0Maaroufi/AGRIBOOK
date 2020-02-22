<?php
	require_once('session.php');
?>

<?php
	require_once('connexion.php');
	
	$id=$_POST['ID'];
	$nom=$_POST['NOM_FILIERE'];
	
	$requete="UPDATE FILIERE SET NOM_FILIERE=? where id=?";
	$param=array($nom,$id);		
	
	$resultat = $con->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:filieres.php");

?>