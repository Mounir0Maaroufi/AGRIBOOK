<?php
                        
    require_once('session.php');
	$id=$_GET['ID'];
	require_once('connexion.php');
	
	$requete="select * from STAGIAIRE where id=$id";
	$resultat = $con->query($requete);
	$STAGIAIRE=$resultat->fetch();
	
	
	$requetef="select * from filiere";	
    $resultatf = $con->query($requetef);

	$requetes="select * from sujet";
	$resultats = $con->query($requetes);
                        
	$requeten="select * from niveau";
	$resultatn = $con->query($requeten);
                        
	$requetee="select * from etablissment";
	$resultate = $con->query($requetee);
                        
	$requeteen="select * from encadreur";                        
	$resultaten = $con->query($requeteen);
    
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Editer un stagiaire</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Editer un stagiaire</div>
				<div class="panel-body">
					<form method="post" action="updatestagaire.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="id" class="control-label" >
								ID=<?php echo $STAGIAIRE['ID']; ?>
							</label>
							<input type="hidden" name="ID" 
									id="id" class="form-control" 
									value="<?php echo $STAGIAIRE['ID']; ?>"/>
						</div>
						
			
						
						<!---- **************************  -->
                    		
						<!---- **************************  -->
					
						<!---- **************************  -->

		




											<!---- **************************  -->
											<!---- **************************  -->
											<!---- **************************  -->
											<!---- **************************  -->
											<!---- **************************  -->
						                    <!---- **************************  -->
                        
					
                        
                        
                        
                        	
						<div class="form-group">
							<label for="NOM" class="control-label">NOM</label>
							<input type="text" name="NOM" id="NOM" class="form-control"	value="<?php echo $STAGIAIRE['NOM']; ?>"/>
						</div>
						
												<!---- **************************  -->

						<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM</label>
							<input type="text" name="PRENOM" id="PRENOM"  class="form-control"  value="<?php echo $STAGIAIRE['PRENOM']; ?>" />
						</div>
                        						<!---- **************************  -->

                        <div class="form-group">
							<label for="DATE" class="control-label">DATE NAISSANCE</label>
							<input type="date" name="DATE" id="DATE" class="form-control" value="<?php echo $STAGIAIRE['DATE']; ?>"/>
						</div>
                        						<!---- **************************  -->

                        
						 <div class="form-group">
							<label for="ADRESSE" class="control-label">ADRESSE</label>
							<input type="text" name="ADRESSE" id="ADRESSE" placeholder="ADRESSE" class="form-control" value="<?php echo $STAGIAIRE['ADRESSE']; ?>"/>
						</div>
                        						<!---- **************************  -->

                        	 <div class="form-group">
							<label for="TELEPHONE" class="control-label">TELEPHONE</label>
							<input type="tel" name="TELEPHONE" id="TELEPHONE" placeholder="TELEPHONE" class="form-control"  value="<?php echo $STAGIAIRE['TELEPHONE']; ?>"/>
						</div>
                        						<!---- **************************  -->

                        
                        	<div class="form-group">
							<label for="ETABLISSMENT" class="control-label" >ETABLISSMENT</label>
							<select name="ETABLISSMENT" id="ETABLISSMENT" class="form-control" >
                                <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Etablissement</option>
                                <?php while($ETABLISSMENT=$resultate->fetch()){ ?>
                                
									<option value="<?php echo $ETABLISSMENT['ID']?>"
                                <?php echo $ETABLISSMENT['ID']==$ETABLISSMENT['ID']?"":"" ?>>
										<?php echo $ETABLISSMENT['NOM']?>
                                </option>
                                
                                		<?php } ?>
							</select>
                        	</div>
                        
                        						<!---- **************************  -->

                        
						<div class="form-group">
							<label for="NIVEAU" class="control-label" >NIVEAU</label>
							<select name="NIVEAU" id="NIVEAU" class="form-control">
                                <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Niveau</option>
                                <?php while($NIVEAU=$resultatn->fetch()){ ?>
									//<option value="<?php echo $NIVEAU['ID']?>"
                                    <?php echo $NIVEAU['ID']==$NIVEAU['ID']?"":"" ?>>									

										<?php echo $NIVEAU['NIVEAU']?>
									</option>
                                		<?php } ?>
							</select>
						</div>
                        						<!---- **************************  -->

                        
						
					<div class="form-group">
							<label for="ID_FILIERE" class="control-label">FILIERE</label>
							<select name="ID_FILIERE" id="ID_FILIERE" class="form-control">
								<?php while($filiere=$resultatf->fetch()){ ?>
									<option value="<?php echo $filiere['ID']?>" 
										<?php echo $STAGIAIRE['ID_FILIERE']==$filiere['ID']?"selected":"" ?>>									
										<?php echo $filiere['NOM_FILIERE']?>
									</option>									
								<?php } ?>
							</select>
						</div>
                        						<!---- **************************  -->

                        	<label class="control-label">TYPE DE STAGE</label>
						<div class="radio" >					
                            <label><input type="radio" name="TYPE" value="Obligatoires" /> Obligatoires </label><br/>					
                            <label><input type="radio" name="TYPE" value="Facultatifs" /> Facultatifs </label><br/>
						</div>
                        
                        						<!---- **************************  -->
                        
                        						<!---- **************************  -->

                        <div class="form-group">
							<label for="SUJET" class="control-label">SUJET</label>
							<select name="SUJET" id="SUJET" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Sujet </option>

								<?php while($sujet=$resultats->fetch()){ ?>
									<option value="<?php echo $sujet['ID']?>">
										<?php echo $sujet['NOM_Sujet']?>
									</option>
                                <?php } ?>
							</select>
						</div>
                        						<!---- **************************  -->
                        
                         <div class="form-group">
							<label for="PERIODE" class="control-label">Période</label>
							<select name="PERIODE" id="PERIODE" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' > Choisir votre Periode </option>

									<option>Un Mois </option>
									<option>Deux Mois </option>
									<option>Trois Mois </option>
									<option> Quatre Mois</option>
									<option> Six Mois</option>
							</select>
						</div>
						
						<!---- **************************  -->
                        
                          	 <div class="form-group">
							<label for="DATEPERIODE1" class="control-label"> Date début souhaitée</label>
							<input type="DATE" name="DATEPERIODE1" id="DATEPERIODE1" class="form-control"/>
						</div>
                        
					
						<!---- **************************  -->
                        
                        	 <div class="form-group">
							<label for="DATEPERIODE2" class="control-label"> Date Fin </label>
							<input type="DATE" name="DATEPERIODE2" id="DATEPERIODE2"  class="form-control"/>
						      </div>
						<!---- **************************  -->
                        
                        	<label class="control-label">Stage Payé ?</label>
						<div class="radio">					
                        <label><input type="radio" name="PAIEMENT" value="Oui"  id="Payé"  <?php echo $STAGIAIRE['PAIEMENT']=="F"?"checked":""?> /> Oui </label><br/>
                        <label><input type="radio" name="PAIEMENT" value="Non" id="Payéé" <?php echo $STAGIAIRE['PAIEMENT']=="F"?"checked":""?> /> Non </label><br/>
						</div>
						
                          <div class="form-group" id="MONTON" style="display: none"  >
							<label for="MONTON" class="control-label">Monton De Prime De Stage ?</label>
							<input type="text" name="MONTON" id="MONTON" placeholder="MONTON" class="form-control"/>
						</div>
                        
						 <div class="form-group">
							<label for="ENCADREUR" class="control-label">ENCADREUR</label>
							<select name="ENCADREUR" id="ENCADREUR" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' >Choisir L'Encadreur </option>

								<?php while($encadreur=$resultaten->fetch()){ ?>
									<option value="<?php echo $sujet['ID']?>">
										<?php echo $encadreur['NOM']?>
										<?php echo $encadreur['PRENOM']?>
									</option>
                                <?php } ?>
							</select>
						</div>
                        						
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
        
	</body>
</html>