<html lang="fr">
<head >

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
header('Content-Type: text/html; charset=UTF-8');
header("Content-type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=Stagiaires.xls"); 


// selectionner la base de données 

$cnx = mysqli_connect( "localhost", "root", "","gestionstagiaire") ;
$sql = "SELECT * FROM STAGIAIRE"; 
//mysqli_query($cnx,'SET NAMES `utf8`');
$sql = mysqli_query($cnx,$sql); 


$tbl= " <table border='1' cellpadding='0' cellspacing='0'> 
<tr bgcolor='#a4ecf5' height='40px'> 
<td>Nom</td> 
<td>Prénom</td> 
<td>Date Naissance</td> 
<td>ADRESSE</td> 
<td>TELEPHONE</td> 
<td>ETABLISSMENT</td> 
<td>NIVEAU</td> 
<td>Filiére</td> 
<td>TYPE DE STAGE</td> 
<td>Sujet</td> 
<td>PERIODE</td> 
<td>Date Début</td> 
<td>Date Fin</td> 
<td>PAIEMENT</td> 
<td>MONTON</td> 
<td>ENCADREUR</td> 

</tr>"; 
while ($STAGIAIRE = mysqli_fetch_array($sql)) 
{ 
$tbl = $tbl . "<tr>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['NOM'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['PRENOM'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['DATE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['ADRESSE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['TELEPHONE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['ETABLISSMENT'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['NIVEAU'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['ID_FILIERE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['TYPE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['SUJET'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['PERIODE'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['DATEPERIODE1'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['DATEPERIODE2'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['PAIEMENT'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['MONTON'] . "</td>"; 
$tbl = $tbl . "<td>" . $STAGIAIRE['ENCADREUR'] . "</td>"; 

$tbl = $tbl . "</tr>"; 
} 
$tbl = $tbl . "</table>"; 

print $tbl ; 
    
    
    
    
    
    
    
while ($STAGIAIRE = mysqli_fetch_array($sql)) 
	//verification du payement
	if ($STAGIAIRE['PAIEMENT']=="non") {
		$STAGIAIRE['MONTON']=0;

	}
    
    
    
    
  echo "</body>";
  echo "</html>";   
    
?>