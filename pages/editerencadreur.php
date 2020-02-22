
<?php
	require_once('session.php');
	$id=$_GET['ID'];
	require_once('connexion.php');
	
	$requete="select * from Encadreur where id=$id";
	$resultat = $con->query($requete);
	$Encadreur=$resultat->fetch();
	?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Editer un Encadreur</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Editer un Encadreur</div>
				<div class="panel-body">
					<form method="post" action="updateEncadreur.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="id" class="control-label" >
								Id=<?php echo $Encadreur['ID']; ?>
							</label>
							<input type="hidden" name="ID" 
									id="id" class="form-control" 
									value="<?php echo $Encadreur['ID']; ?>"/>
						</div>
						
						<div class="form-group">
							<label for="NOM" class="control-label">NOM Encadreur</label>
							<input type="text" name="NOM" id="NOM" class="form-control"
									value="<?php echo $Encadreur['NOM']; ?>"/>
						</div>
                        
                        	<div class="form-group">
							<label for="PRENOM  " class="control-label">PRENOM Encadreur</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"
									value="<?php echo $Encadreur['PRENOM']; ?>"/>
						</div>
						
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>