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
                <?php
                session_start();
                try {
                    $type = $_POST["listetype"];
                    $image = $_FILES["image"]["name"];
                    $upload="images/".$image;
                    move_uploaded_file($_FILES["image"]["tmp_name"],$upload);
                    $sql="insert into parc(nom, type, libelle, image, pays, description, position) values(:nom, :type, :libelle, :image, :pays, :description, :position)";
                    $resultat = $cnx->prepare($sql);
                    $nbLignes= $resultat->execute(array(":nom"=> $_POST["nom"],":type"=> $type,":libelle"=> $_POST["libelle"],":image"=> "$upload",":pays"=> $_POST["pays"],":description"=> $_POST["description"],":position"=> $_POST["position"]));
                    
                    echo $nbLignes." parc ajouté";
                }
                catch(PDOException $e) { // gestion des erreurs
                    echo"ERREUR dans l'ajout ".$e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>

</section>
<?php require 'footer.html'?>

