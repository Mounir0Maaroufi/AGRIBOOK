<?php
	require_once('session.php');
	
	require_once('connexion.php');
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouvelle Encadreur</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Nouvelle Encadreur</div>
				<div class="panel-body">
					<form method="POST" action="insertEncadreur.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="NOM" class="control-label">NOM Encadreur</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
                        
                        		<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM Encadreur</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
						</div>
								
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
		</div>
	</body>
</html>