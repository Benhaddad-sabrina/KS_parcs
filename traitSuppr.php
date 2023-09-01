<?php require 'entete.php';
include "ConnectBD.php";?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Suppression d'un parc</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Voilà votre parc est maintenant supprimé !</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <?php
                
                
                try {
                    $sql="delete from parc where nom=:nom";
                    $resultat = $cnx->prepare($sql);
                    $nbLignes= $resultat->execute(array("nom"=>$_POST["listename"]));
                    echo $nbLignes." ligne supprimée";
                    }
                    catch(PDOException $e) { // gestion des erreurs
                    echo"ERREUR dans la modification ".$e->getMessage();
                    }
                ?>
            </div>
        </div>
    </div>

</section>
<?php require 'footer.html';?>

