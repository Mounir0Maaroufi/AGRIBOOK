<?php
	require_once('session.php');
	
	require_once('connexion.php');
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouvelle sujet</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Nouvelle sujet</div>
				<div class="panel-body">
					<form method="POST" action="insertsujet.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="sujet" class="control-label">SUJET</label>
							<textarea rows="4" cols="50" name="sujet" id="sujet" class="form-control" > </textarea>
                                                                       
						</div>
								
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
		</div>
	</body>
</html>