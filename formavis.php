<?php require 'entete.php';
include "ConnectBD.php";
$_SESSION["parc"]=$_POST["listename"];

?>
<section >


    <div class="container" style="margin-top:30px">
      <div class="row">
          <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Choisissez une note entre 1 et 5</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  <p class="text-black-50 mb-0"><?php echo "Vous souhaitez donner votre avis sur le Parc: ".$_SESSION["parc"]." que vous avez testé ? "?></p>
                  <br><br>
               </div>
               <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <div class="featured-text text-center text-lg-left">
                  <h2>Choisissez une note  </h2>
                </div>
                <br><br><br><br>
                <form action="traitparc.php" method="POST">
                <label class="text-black-50 mb-0">Veuillez entrez une note entre 1 et 5:</label>
                <br><br>
                <select name="listename"> 
                    <input type="number" id="note" name="note" min="1" max="5" value=1 required >
				</select>
                <br><br>
                <label class="text-black-50 mb-0">Entrez un commentaire:</label>
                <input type= comment name="com" value="Entrez un commentaire" required>


				<br><br><br><br>
				<button type="submit" class="btn btn-success">Valider</button> 
				<button type="reset" class ="btn btn-primary ">Effacer</button>
				
			</form>
</section>                
<?php require 'footer.html';?>