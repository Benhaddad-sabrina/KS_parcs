<?php require 'entete.php';
include "ConnectBD.php";?>
<section>
        <div class="container" style="margin-top:30px">
          <div class="row">
            <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Ajout d'un parc</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  
               </div>
               <hr class="d-sm-none">
              
            </div>
        
            <div class="col-sm-8">
               <div class="featured-text text-center text-lg-left">
                  <h2>Ajoutez un parc !</h2>
                </div>
                <br><br>
                <form action ="traitAjout.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="prenomDemo">Nom *</label>
                    <input type="text" class="form-control" name= "nom" id="prenomDemo" aria-describedby="prenomHelp" placeholder="Enter Name" required>
                    <small id="prenomHelp" class="form-text text-muted">Veuillez inscrire le nom du parc à ajouter</small>
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="TypeDemo">Type *</label>
                    <select name="listetype"> 
				<?php		
				$sql="SELECT distinct (type) FROM parc";// on écrit la requête sous forme de chaine de caractères
				try{
					$resultat = $cnx->query($sql); //// on exécute la requête qui renvoie un curseur (pointeur sur le jeu d'enregistrements)
					$tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);// on lit le contenu du curseur $résultat récupéré dans un tableau associatif 
						foreach($tabloResultat as $ligne)   {
						echo "<option value='".$ligne["type"]."'>".$ligne["type"]."</option>";
					}
				}
				catch(PDOException $e) {   // gestion des erreurs
						echo"ERREUR PDO  " . $e->getMessage();
				}
			?>	 		
				</select>
				<br><br><br><br>
				
                </div>
                <div class="form-group">
                    <label for="libDemo">Libelle *</label>
                    <input type="text" class="form-control" name= "libelle" id="libDemo" aria-describedby="libHelp" placeholder="Enter the libelle" required>
                    <small id="libHelp" class="form-text text-muted">Une courte description</small>
                    <br><br><br>
                </div>
                <div class="form-group" >
                    <label for="Image">Image *</label>
                    <input type="file" class="form-control" name= "image"  accept ="image/png,image/jpeg,image/jpg">
                    
                    <br><br><br>
    
                </div> 
                <div class="form-group">
                    <label for="imageDemo">Pays *</label>
                    <input type="text" class="form-control" name= "pays" id="imageDemo" aria-describedby="imageHelp"  required>
                    <small id="imageHelp" class="form-text text-muted">A quel pays appartient ce parc ?</small>
                    <br><br><br>
    
                </div> 
                <div class="form-group">
                    <label for="descriptionDemo">Description *</label>
                    <input type="text" class="form-control" name= "description" id="descriptionDemo" aria-describedby="descriptionHelp" required>
                    <small id="descriptipnHelp" class="form-text text-muted"> Description du Parc</small>
                    <br><br><br>
                </div>
                <div class="form-group">
                    <label for="posDemo">Position </label>
                    <input type="text" class="form-control" name= "position" id="posDemo" aria-describedby="posHelp" >
                    <small id="posHelp" class="form-text text-muted"> La position du parc (le lien)</small>
                    <br><br><br>
                </div>
                <button type="submit" class="btn btn-success">Ajouter le Parc</button> <br><br>
                </form>
                <br>
                <br>
            </div>
          </div>
        </div>
<?php require 'footer.html' ?>