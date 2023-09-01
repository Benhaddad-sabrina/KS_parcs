<?php require 'entete.php';
include "ConnectBD.php";
?>

<section>

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Inscription</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Bienvenue parmi la KS PARCS !</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <?php
                
                
                try {
                    $sql="INSERT into user(email_user, nom, prenom, mot_de_passe) values(:email_user, :nom, :prenom, :mot_de_passe)";
                    $resultat = $cnx->prepare($sql);
                    
                    $nbLignes= $resultat->execute(array(":email_user"=> $_POST["email_user"],":nom"=> $_POST["nom"],":prenom"=> $_POST["prenom"],":mot_de_passe"=> $_POST["mot_de_passe"]));
                    
                    echo " Vous êtes bien inscrit sur le site KS PARCS ! Il ne vous reste plus qu'à vous connecter.";
                }
                catch(PDOException $e) { // gestion des erreurs
                    echo"ERREUR dans l'ajout ".$e->getMessage();
                }
                ?>
            </div>
        </div>
    </div>

</section>
<?php require 'footer.html';?>


