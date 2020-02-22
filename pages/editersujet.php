
<?php
	require_once('session.php');
	$id=$_GET['ID'];
	require_once('connexion.php');
	
	$requete="select * from sujet where id=$id";
	$resultat = $con->query($requete);
	$sujet=$resultat->fetch();
	?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Editer un sujet</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Editer un sujet</div>
				<div class="panel-body">
					<form method="post" action="updatesujet.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="id" class="control-label" >
								Id=<?php echo $sujet['ID']; ?>
							</label>
							<input type="hidden" name="ID" 
									id="id" class="form-control" 
									value="<?php echo $sujet['ID']; ?>"/>
						</div>
						
						<div class="form-group">
							<label for="sujet" class="control-label">NOM Sujet</label>
							<textarea rows="4" cols="50" name="sujet" id="sujet" class="form-control" ><?php echo $sujet['NOM_Sujet'];?> </textarea>
									
						</div>
						
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>