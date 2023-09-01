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
                  <h2>Connectez-vous en tant qu'Administrateur !</h2>
                </div>
                <br><br>
                <form action="traitConnectAdmin.php" method="post">
                <div class="form-group">
                    <label for="EmailDemo">Adresse e-mail</label>
                    <input type="email" class="form-control" name= "email" id="EmailDemo" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="passDemo">Mot de passe</label>
                    <input type="password" class="form-control" name = "mdp" id="passDemo" aria-describedby="passHelp" placeholder="Password">
                    <br><br><br>
                </div>
                
                <button type="submit" class="btn btn-success">Connexion</button> <br><br>
                </form>
                <br>
                <br>
               

            </div>
          </div>
        </div>
</section>
<?php require 'footer.html'?>