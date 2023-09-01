<?php require 'entete.php' ?>
<section >

    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Avis des utilisateurs</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0">Découvrez les parcs préférés de notre site classés du moins bien noté au meilleur avec leurs avis !</p>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                
                <?php include 'connectBD.php';
                $sql = "SELECT id_parc ,nom, image , AVG(note) as moy, commentaire,date,heure FROM parc, avis where id=id_parc GROUP BY id_parc ORDER BY moy ";
    
                try{
                    $resultat = $cnx->query($sql);
                    $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);
                    foreach($tabloResultat as $ligne) {
                        echo "<h2 class=text-black-50 mx-auto mt-2 mb-5>".$ligne["nom"]."<br></h2>";
                        echo " <img  src=".$ligne["image"]." width=65% >";
                        echo "</br></br>";
                        echo "La note moyenne donnée par les utilisateurs : ".$ligne["moy"]. " / 5";
                        echo "</br></br>";
                        echo "L'avis d'un de nos utilisateurs : <br>".$ligne["commentaire"];
                        
                        echo "<br>";
                        echo "Publié le : ".$ligne["date"]." à : ".$ligne["heure"];
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
