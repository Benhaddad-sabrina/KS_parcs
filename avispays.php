<?php require 'entete.php';
include "ConnectBD.php";?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Donnez votre avis sur un Parc</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Vous souhaitez donner votre avis sur un parc que vous avez testé ? Sélectionnez le nom du parc et le tour est joué !</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <div class="featured-text text-center text-lg-left">
                  <h2>Choisissez le parc </h2>
                </div>
                <br><br><br><br>
                <form action="formavis.php" method="POST">
                <label class="text-black-50 mb-0">Veuillez sélectionner le parc :</label>
                <br><br>
                <select name="listename"> 
                <?php		
				$sql="SELECT id, nom FROM parc";// on écrit la requête sous forme de chaine de caractères
				try{
					$resultat = $cnx->query($sql); //// on exécute la requête qui renvoie un curseur (pointeur sur le jeu d'enregistrements)
					$tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);// on lit le contenu du curseur $résultat récupéré dans un tableau associatif 
						foreach($tabloResultat as $ligne)   {
						echo "<option value='".$ligne["id"]."'>".$ligne["nom"]."</option>";
					}
				}
				catch(PDOException $e) {   // gestion des erreurs
						echo"ERREUR PDO  " . $e->getMessage();
				}
			?> 		
				</select>
				<br><br><br><br>
				<button type="submit" class="btn btn-success">Valider</button> 
				<button type="reset" class ="btn btn-primary ">Effacer</button>
				
			</form>
</section>                
<?php require 'footer.html';?>