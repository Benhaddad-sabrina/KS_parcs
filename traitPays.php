<?php require 'entete.php';
include "ConnectBD.php";?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Parcs par Pays</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Vous voyagez bientôt ? Découvrez alors les meilleurs parcs de chaque pays</p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <?php
                
                $sql="SELECT nom, description,image, position,type, pays FROM parc where pays = :pays";
                
                $resultat = $cnx->prepare($sql);
                
                try{
                    $pays = $_POST["listepays"];
                    $resultat->execute(array(":pays" => $pays));
                    
                    $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($tabloResultat as $ligne) {
                        echo "<h2 class=text-black-50 mx-auto mt-2 mb-5>".$ligne["nom"]."<br></h2>";
                        echo $ligne["description"];
                        echo "</br></br>";
                        echo "Type : ".$ligne["type"];
                        echo "</br></br>";
                        echo " <img  src=".$ligne["image"]." width=65% >";
                        echo "</br></br></br></br>";
                        echo "<iframe src =".$ligne["position"]."width= 600 height= 450  style= border:0 loading= lazy></iframe>";
                        echo "</br></br> ----------------------- <br><br> ";
                    }
                    $resultat->closeCursor();       // on ferme le curseur des résultats
                }
                catch(PDOException $e) {   // gestion des erreurs
                   echo"ERREUR PDO  " . $e->getMessage();
                } 
                ?>
            </div>
        </div>
    </div>

</section>
<?php require 'footer.html'?>

