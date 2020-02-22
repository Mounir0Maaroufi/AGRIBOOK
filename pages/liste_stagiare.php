<?php
	require_once('session.php');
?>
<?php
	
$ID = $_GET['ID'];

	require_once('connexion.php');
		$resultat = $con->query("SELECT *
								FROM STAGIAIRE S,FILIERE F
								WHERE S.ID_FILIERE=F.NOM_FILIERE 
								AND S.ID = $ID");
$resultat1 = $con->query("SELECT ID,NOM,PRENOM
                        FROM STAGIAIRE
                        WHERE ID = $ID");
										
?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>Gestion des stagiaires</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		 <div id="wrapper">
			<?php 
             include('entete.php');?>
             	<div class="container">
				<div class="panel panel-success espace60">
								<?php $STAG=$resultat1->fetch(); ?>

					<div class="panel-heading"><center>Fiche de Stagiaire de <?php echo $STAG['PRENOM'] ?>  <?php echo $STAG['NOM'] ?></center></div>
             
			
					<div class="panel-body">
								<?php $STAGIAIRE=$resultat->fetch(); ?>
						<table class="table table-striped">
                            
								
								<tr>
									<th>NOM</th><td><?php echo $STAGIAIRE['NOM'] ?></td>
                                </tr>
								<tr>
									<th>PRENOM</th><td><?php echo $STAGIAIRE['PRENOM'] ?></td>
                                </tr>
								<tr>
									<th>DATE NAISSANCE</th><td><?php echo $STAGIAIRE['DATE'] ?></td>
                                </tr>
                            
                            <tr>
									<th>ADRESSE</th><td><?php echo $STAGIAIRE['ADRESSE'] ?></td>
                                </tr>  
                            
                                <tr>
									<th>TELEPHONE</th><td><?php echo $STAGIAIRE['TELEPHONE'] ?></td>
                                </tr>   
                            
                                <tr>
									<th>ETABLISSMENT</th><td><?php echo $STAGIAIRE['ETABLISSMENT'] ?></td>
                                </tr> 
                            
                                <tr>
									<th>NIVEAU</th><td><?php echo $STAGIAIRE['NIVEAU'] ?></td>
                                </tr>
                            
								<tr>
									<th>FILIERE</th><td><?php echo $STAGIAIRE['NOM_FILIERE'] ?></td>
                                </tr>
                                
                                <tr>
									<th>TYPE DE STAGE</th><td><?php echo $STAGIAIRE['TYPE'] ?></td>
                                </tr>
								<tr>
									<th>SUJET</th><td><?php echo $STAGIAIRE['SUJET'] ?></td>
                                </tr>
								<tr>
									<th>PERIODE</th><td><?php echo $STAGIAIRE['PERIODE'] ?></td>
                                </tr>
                            
                                <tr>
									<th>DATE DEBUT</th><td><?php echo $STAGIAIRE['DATEPERIODE1'] ?></td>
                                </tr>
								<tr>
									<th>DATE FIN</th><td><?php echo $STAGIAIRE['DATEPERIODE2'] ?></td>
                                </tr>
                            
                                <tr>
									<th>PAIEMENT</th><td><?php echo $STAGIAIRE['PAIEMENT'] ?></td>
                                </tr>  
                            
                                <tr>
									<th>MONTON</th><td><?php echo $STAGIAIRE['MONTON'] ?></td>
                                </tr>
                            
                                <tr>
									<th>ENCADREUR</th><td><?php echo $STAGIAIRE['ENCADREUR'] ?></td>
                                </tr>
                            
						</table>
						
					</div>		
           <a href="Exportertagaire.php?ID=<?= $ID ?>" class="btn btn-primary" >Exporter stagiaire </a>
           <a href="ATTESTATION DE STAGE.php?ID=<?= $ID ?>" class="btn btn-primary" >ATTESTATION </a>



				</div>	
				
			</div>
		</div>
	</body>
</html>