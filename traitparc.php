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
                    $sql="INSERT into avis(email_user, id_parc, note, date, commentaire, heure) values(:email_user, :id_parc, :note, :date, :commentaire, :heure)";
                    $resultat = $cnx->prepare($sql);
                    $date=date("Y-m-d");
                    $heure=date("H:i:s");
                    $nbLignes= $resultat->execute(array(":email_user"=> $_SESSION["email"],":id_parc"=>$_SESSION["parc"],":note"=> $_POST["note"],":date"=> $date,":commentaire" =>$_POST["com"],":heure"=> $heure));
                    
                    echo "Votre avis a bien été pris en compte";
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