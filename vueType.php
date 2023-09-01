<?php require 'entete.php';
include "ConnectBD.php";?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Parcs par Types</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Vous hésitez entre parc aquatique et à sensations fortes ? Découvrez notre sélection des parcs en fonction de leur type !</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <div class="featured-text text-center text-lg-left">
                  <h2>Choisissez le type de parcs que vous souhaitez consulter </h2>
                </div>
                <br><br><br><br>
                <form action="traitType.php" method="POST">
                <label class="text-black-50 mb-0">Veuillez sélectionner le type de parcs que vous souhaitez consulter :</label>
                <br><br>
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
				<button type="submit" class="btn btn-success">Valider</button> 
				<button type="reset" class ="btn btn-primary ">Effacer</button>
				
			</form>
</section>                
<?php require 'footer.html';?>
