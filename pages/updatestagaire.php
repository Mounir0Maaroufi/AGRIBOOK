<?php
	require_once('session.php');
?>

<?php
	require_once('connexion.php');
	
	$id=$_POST['ID'];
	$nom=$_POST['NOM'];
	$prenom=$_POST['PRENOM'];
	$id_filiere=$_POST['ID_FILIERE'];	
	$civilite=$_POST['civilite'];

		
		$requete="UPDATE STAGIAIRE SET NOM=?,PRENOM=?,ID_FILIERE=?,PHOTO=?,CIVILITE=? where id=?";
		
		$param=array($nom,$prenom,$id_filiere,$nomPhoto,$civilite,$id);		
	}
	else{ // Photo non envoyée
		$requete="UPDATE STAGIAIRE SET NOM=?,PRENOM=?,ID_FILIERE=?,CIVILITE=? where id=?";
				
		$param=array($nom,$prenom,$id_filiere,$civilite,$id);
	}
			
	$resultat = $con->prepare($requete);	
	$resultat->execute($param);	
	
	header("location:stagiaires.php");

?>