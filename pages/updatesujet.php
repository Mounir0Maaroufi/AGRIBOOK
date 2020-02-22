<?php
	require_once('session.php');
?>

<?php
	require_once('connexion.php');
	
	$id=$_POST['ID'];
	$nom=$_POST['sujet'];
	
	$requete="UPDATE sujet SET NOM_Sujet=? where id=?";
	$param=array($nom,$id);		
	
	$resultat = $con->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:sujet.php");

?>