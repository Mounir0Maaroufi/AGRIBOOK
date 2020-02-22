    <?php
	require_once('session.php');
?>

<?php
	
	require_once('connexion.php');
	
	if(isset($_GET['motCle']))
		$mc=$_GET['motCle'];
	else
		$mc="";
	
	if(isset($_GET['size']))
		$size=$_GET['size'];
	else
		$size=5;
		
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=1;
			
	$offset=($page-1)*$size;
	
		$resultat1 = $con->query("SELECT * FROM ENCADREUR
									WHERE  NOM like '%$mc%' OR PRENOM like '%$mc%'
									ORDER BY ID
									LIMIT $size
									OFFSET $offset");

		$resultat2 = $con->query("select count(*) as nbrencadreur
									from encadreur 
									where NOM like '%$mc%'OR PRENOM like '%$mc%'"  );

	
	
	$nbr=$resultat2->fetch();
	
	$nbrF=$nbr['nbrencadreur'];
	
	$reste=$nbrF % $size; //l'operateur % (modulo) retourne le reste de la 
						// devision euclidienne de $nbrF sur $size
	if($reste==0)
		$nbrPage=$nbrF/$size;
	else
		$nbrPage=floor($nbrF/$size)+1;// floor retourne la partie entière d'un nombre 
										// decimale
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gestion des Encadreurs</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		<?php include('entete.php');?>
			
		<div class="container">
			<div class="panel panel-success espace60">
				<div class="panel-heading">Rechercher des Encadreurs </div>
				<div class="panel-body">
					<form method="get" action="encadreurs.php" class="form-inline">
						<div class="form-group">													
							
							<input type="text" name="motCle" 
									placeholder="Taper un mot clé"
									id="motCle" class="form-control" 
									value="<?php echo $mc; ?>"/>
								<button type="submit" class="btn btn-success">
								<i class="glyphicon glyphicon-search"></i>
								Chercher...
							</button>
							
							&nbsp&nbsp&nbsp
							<?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?>
								<a href="nouvelleencadreur.php">Nouvelle Encadreur</a>
							<?php } ?>	
						</div>
							
					</form>
				</div>
			</div>
			<div class="panel panel-primary ">
				<div class="panel-heading">Liste des Encadreurs (<?php echo $nbrF ?>&nbsp Encadreurs) </div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>NOM DE LA ENCADREUR</th>
								<th>PRENOM DE LA ENCADREUR</th>
								 <?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?> 
									<th>ACTIONS</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php while($encadreur=$resultat1->fetch()){?>
								<tr>
									<td><?php echo $encadreur['ID'] ?></td>
									<td><?php echo $encadreur['NOM'] ?></td>
									<td><?php echo $encadreur['PRENOM'] ?></td>
									
									<td>
										<?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?>
											<!--  Action Editer un Encadreur -->
											<a href="editerEncadreur.php?ID=<?php echo $encadreur['ID'] ?>">
												<span class="glyphicon glyphicon-pencil"></span>
											</a>
											
											&nbsp &nbsp
											<!--  Action Supprimer un Encadreur -->
											<a Onclick="return confirm('Etes vous sur de vouloir supprimer l'Encadreur?')" 
												href="supprimerencadreur.php?ID=<?php echo $encadreur['ID'] ?>">
												<span class="glyphicon glyphicon-trash"></span>
											</a>
																						
										<?php } ?>
										
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div>
						<ul class="nav nav-pills">
							
							<?php for($i=1;$i<=$nbrPage;$i++){ ?>
								<li class="<?php if($i==$page) echo 'active' ?>">
									<a href="Encadreurs.php?page=<?php echo $i ?>
										&motCle=<?php echo $mc ?>
										Page <?php echo $i ?>
									</a>
								</li>
							<?php } ?>	
						</ul>
					</div>
					
				</div>				
			</div>	
			
		</div>
	</body>
</html>  