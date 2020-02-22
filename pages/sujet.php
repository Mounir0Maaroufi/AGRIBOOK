    <?php
	require_once('session.php');
?>

<?php
	
	require_once('connexion.php');
	
	if(isset($_GET['motCle']))
		$mc=$_GET['motCle'];
	else
		$mc="";
	
	if(isset($_GET['NIVEAU']))
		$niveau=$_GET['NIVEAU'];
	else
		$niveau="all";
		
	if(isset($_GET['size']))
		$size=$_GET['size'];
	else
		$size=5;
		
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=1;
			
	$offset=($page-1)*$size;
	
		$resultat1 = $con->query("SELECT * FROM sujet
									WHERE  NOM_Sujet like '%$mc%' 
									ORDER BY ID
									LIMIT $size
									OFFSET $offset");

		$resultat2 = $con->query("select count(*) as nbrsujet
									from sujet 
									where NOM_Sujet like '%$mc%'");

	
	
	$nbr=$resultat2->fetch();
	
	$nbrF=$nbr['nbrsujet'];
	
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
		<title>Gestion des Sujets</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		<?php include('entete.php');?>
			
		<div class="container">
			<div class="panel panel-success espace60">
				<div class="panel-heading">Rechercher des Sujets </div>
				<div class="panel-body">
					<form method="get" action="sujet.php" class="form-inline">
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
								<a href="nouvellesujet.php">Nouvelle Sujet</a>
							<?php } ?>	
						</div>
							
					</form>
				</div>
			</div>
			<div class="panel panel-primary ">
				<div class="panel-heading">Liste des Sujets (<?php echo $nbrF ?>&nbsp Sujets) </div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>NOM DE LA SUJET</th>
								 <?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?> 
									<th>ACTIONS</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php while($Sujet=$resultat1->fetch()){?>
								<tr>
									<td><?php echo $Sujet['ID'] ?></td>
									<td><?php echo $Sujet['NOM_Sujet'] ?></td>
									
									<td>
										<?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?>
											<!--  Action Editer un Sujet -->
											<a href="editerSujet.php?ID=<?php echo $Sujet['ID'] ?>">
												<span class="glyphicon glyphicon-pencil"></span>
											</a>
											
											&nbsp &nbsp
											<!--  Action Supprimer un Sujet -->
											<a Onclick="return confirm('Etes vous sur de vouloir supprimer la Sujets?')" 
												href="supprimerSujet.php?ID=<?php echo $Sujet['ID'] ?>">
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
									<a href="sujet.php?page=<?php echo $i ?>
										&motCle=<?php echo $mc ?>
										&NIVEAU=<?php echo $niveau ?>">
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