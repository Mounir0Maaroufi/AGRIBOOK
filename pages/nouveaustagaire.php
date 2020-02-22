<?php
	require_once('session.php');
	
	require_once('connexion.php');
	$requetef="select * from filiere";
	$requetes="select * from sujet";
	$requeten="select * from niveau";
	$requetee="select * from etablissment";
	$requeteen="select * from encadreur";
	$resultatf = $con->query($requetef);
	$resultats = $con->query($requetes);
	$resultatn = $con->query($requeten);
	$resultate = $con->query($requetee);
	$resultaten = $con->query($requeteen);
    



			
		


?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouveau stagiaire</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">    
        
        
        
        <script>
            function activer(){
                var select = document.getElementById("ETABLISSMENT").value;
                if(select=="AUTRE"){
                    document.getElementById("zoneautre").style.display = "block";
                }else{
                    document.getElementById("zoneautre").style.display = "none";
                }
            }
            
            
                function primeoui(){
                var input = document.getElementById("Payé").value;
                if(input=="Oui"){
                    document.getElementById("MONTON").style.display = "block";
                }
            }
            
            
                  function primenon(){
                var input = document.getElementById("Payéé").value;
                if(input=="Non"){
                    document.getElementById("MONTON").style.display = "none";
                }
            }
            
        </script>
        
        
    </head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Nouveau stagiaire</div>
				<div class="panel-body">
                                            <!---- **************************  -->

					<form method="post" action="insertStagiaire.php" class="form" name="formulaire" enctype="multipart/form-data">
											<!---- **************************  -->
						                    <!---- **************************  -->
                        
						<div class="form-group">
							<label for="NOM" class="control-label">NOM</label>
							<input  type="text" name="NOM" id="NOM" placeholder="NOM"   class="form-control" required />
						</div>
												<!---- **************************  -->

						<div class="form-group">
							<label for="PRENOM" class="control-label">PRENOM</label>
							<input  type="text" name="PRENOM" id="PRENOM" placeholder="PRENOM" class="form-control" required/>
						</div>
                        						<!---- **************************  -->

                        <div class="form-group">
							<label for="DATE" class="control-label">DATE NAISSANCE</label>
							<input  type="date" name="DATE" id="DATE" class="form-control"required/>
						</div>
                        						<!---- **************************  -->

                        
						 <div class="form-group">
							<label for="ADRESSE" class="control-label">ADRESSE</label>
							<input  type="text" name="ADRESSE" id="ADRESSE" placeholder="ADRESSE" class="form-control" required/>
						</div>
                        						<!---- **************************  -->

                        	 <div class="form-group">
							<label for="TELEPHONE" class="control-label">TELEPHONE</label>
							<input type="tel" name="TELEPHONE" id="TELEPHONE" placeholder="TELEPHONE" class="form-control" required/>
						</div>
                        						<!---- **************************  -->

                        
                        	<div class="form-group">
							<label  for="ETABLISSMENT" class="control-label" >ETABLISSMENT</label>
							<select  name="ETABLISSMENT" id="ETABLISSMENT" class="form-control"   onchange="activer()">
                                <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Etablissement</option>
                                <?php while($etablissment=$resultate->fetch()){ ?>
                                
									<option  value="<?php echo $etablissment['NOM']?>">
										<?php echo $etablissment['NOM']?>
                                </option>
                                
                                		<?php } ?>
                                <option value="AUTRE"> AUTRE...  </option>
                                    
							</select>
                                
                           
                                      <div class="form-group" id="zoneautre" style="display: none">
							<label for="AUTRE1" class="control-label">AUTRE</label>
							<input  type="text" name="AUTRE1" id="AUTRE1" placeholder="Autre etablissement" class="form-control"/>
						</div>	
                                
                                
						</div>
                        
                        						<!---- **************************  -->

                        
						<div class="form-group">
							<label for="NIVEAU" class="control-label" >NIVEAU</label>
							<select  name="NIVEAU" id="NIVEAU" class="form-control" onChange="Lien()">
                                <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Niveau</option>
                                <?php while($NIVEAU=$resultatn->fetch()){ ?>
									<option value="<?php echo $NIVEAU['NIVEAU']?>">
										<?php echo $NIVEAU['NIVEAU']?>
									</option>
                                		<?php } ?>
							</select>
						</div>
                        						<!---- **************************  -->

                        
						
						<div class="form-group">
							<label for="ID_FILIERE" class="control-label" >FILIERE</label>
							<select name="ID_FILIERE" id="ID_FILIERE" class="form-control">
                                <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Filière</option>
                                <?php while($filiere=$resultatf->fetch()){ ?>
									<option value="<?php echo $filiere['NOM_FILIERE']?>">
										<?php echo $filiere['NOM_FILIERE']?>
									</option>
								<?php } ?>
							</select>
						</div>
                        						<!---- **************************  -->

                        	<label class="control-label">TYPE DE STAGE</label>
						<div class="radio" >					
                            <label><input type="radio" name="TYPE" value="Obligatoires" required /> Obligatoires </label><br/>					
                            <label><input type="radio" name="TYPE" value="Facultatifs" required /> Facultatifs </label><br/>
						</div>
                        
                        						<!---- **************************  -->
                        
                        						<!---- **************************  -->

                        <div class="form-group">
							<label for="SUJET" class="control-label">SUJET</label>
							<select name="SUJET" id="SUJET" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' >Choisir votre Sujet </option>

								<?php while($sujet=$resultats->fetch()){ ?>
									<option value="<?php echo $sujet['NOM_Sujet']?>">
										<?php echo $sujet['NOM_Sujet']?>
									</option>
                                <?php } ?>
							</select>
						</div>
                            <!---- **************************  -->
                        
                         <div class="form-group">
							<label for="PERIODE" class="control-label">Période</label>
							<select  required name="PERIODE" id="PERIODE" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' > Choisir votre Periode </option>

									<option>Un Mois </option >
									<option>Deux Mois </option>
									<option>Trois Mois </option>
									<option> Quatre Mois</option>
									<option> Six Mois</option>
							</select>
						</div>
						
						<!---- **************************  -->
                        
                          	 <div class="form-group">
							<label for="DATEPERIODE1" class="control-label"> Date début souhaitée</label>
							<input type="DATE" name="DATEPERIODE1" id="DATEPERIODE1" class="form-control" required />
						</div>
                        
					
						<!---- **************************  -->
                        
                        	 <div class="form-group">
							<label for="DATEPERIODE2" class="control-label"> Date Fin </label>
							<input type="DATE" name="DATEPERIODE2" id="DATEPERIODE2"  class="form-control" required />
						      </div>
						<!---- **************************  -->
                        
                        	<label  class="control-label">Stage Payé ?</label>
						<div class="radio">					
                        <label><input type="radio" name="PAIEMENT" value="Oui"  id="Payé" onchange="primeoui()" required /> Oui </label><br/>
                        <label><input type="radio" name="PAIEMENT" value="Non" id="Payéé" onchange="primenon()" required /> Non </label><br/>
						</div>
						
                          <div class="form-group" id="MONTON" style="display: none"  >
							<label for="MONTON" class="control-label">Monton De Prime De Stage ?</label>
							<input type="text" name="MONTON" id="MONTON" placeholder="MONTON"  class="form-control"/>
						</div>
                        
						 <div class="form-group">
							<label for="ENCADREUR" class="control-label">ENCADREUR</label>
							<select name="ENCADREUR" id="ENCADREUR" class="form-control">
                             <option disabled="disabled" selected="selected" style='color:red;' >Choisir L'Encadreur </option>

								<?php while($encadreur=$resultaten->fetch()){ ?>
									<option value="<?php echo $encadreur['NOM']?>">
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



