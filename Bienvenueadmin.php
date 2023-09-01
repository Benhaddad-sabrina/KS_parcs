<?php require 'entete.php' ?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Bienvenue !</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Espace admin !</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                
                <?php include 'connectBD.php';
                $sql = "SELECT nom, prenom FROM admin";
                try{
                    $resultat = $cnx->query($sql);
                    $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($tabloResultat as $ligne) {
                        echo "<h2 class=text-black-50 mx-auto mt-2 mb-5> Bienvenue dans votre espace Admin <br></h2>";
                        echo "<h2 class=text-black-50 mx-auto mt-2 mb-5>".$ligne["nom"]." ".$ligne["prenom"]."</h2><br>";
                        echo "Que voulez-vous modifier aujourd'hui ?";
                        echo "</br></br></br></br>";
                    }
                    $resultat->closeCursor();       // on ferme le curseur des résultats
                }
                catch(PDOException $e) {   // gestion des erreurs
                   echo"ERREUR PDO  " . $e->getMessage();
                } 
            
                ?>

    </div>

</section>
<?php require 'footer.html' ?>
