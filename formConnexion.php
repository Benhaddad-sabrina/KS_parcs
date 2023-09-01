<?php require 'entete.php'?>
<section>
        <div class="container" style="margin-top:30px">
          <div class="row">
            <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Connexion</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  
               </div>
               <hr class="d-sm-none">
              
            </div>
        
            <div class="col-sm-8">
               <div class="featured-text text-center text-lg-left">
                  <h2>Quel plaisir de vous revoir !</h2>
                </div>
                <br><br>
                <form action="traitConnexion.php" method="post">
                <div class="form-group">
                    <label for="EmailDemo">Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" id="EmailDemo" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Veuillez insérez l'email lié avec votre compte s'il vous plaît</small>
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="passDemo">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control" id="passDemo" aria-describedby="passHelp" placeholder="Password">
                    <br><br><br>
                </div>
                
                <button type="submit" class="btn btn-success">Connexion</button> <br><br>
                </form>
                <br>
                <br>
               
                  <p class="text-black-50 mb-0">Pas encore inscrit ? <a href="formInscription.php">Créer un compte</a></p>
                <br>
            </div>
          </div>
        </div>
</section>
<?php require 'footer.html'?>