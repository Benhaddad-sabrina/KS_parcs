<?php require 'entete.php'?>
<section>
        <div class="container" style="margin-top:30px">
          <div class="row">
            <div class="col-sm-4">
              <div class="featured-text text-center text-lg-left">
                  <h2>Inscription</h2>
                  <img class="img-fluid" src="assets/img/logo.jpg">
                  
               </div>
               <hr class="d-sm-none">
              
            </div>
        
            <div class="col-sm-8">
               <div class="featured-text text-center text-lg-left">
                  <h2>Inscrivez-vous pour profiter du meilleur de KS Parcs </h2>
                </div>
                <br><br>
                <form action ="traitInscription.php" method="post">
                <div class="form-group">
                    <label for="NameDemo">Nom  *</label>
                    <input type="text" name="nom" class="form-control" id="NameDemo" aria-describedby="nameHelp" placeholder="Enter Full Surname" required>
                    <small id="nameHelp" class="form-text text-muted">Veuillez inscrire votre nom</small>
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="prenomDemo">Prénom *</label>
                    <input type="text" name="prenom" class="form-control" id="prenomDemo" aria-describedby="prenomHelp" placeholder="Enter Full Name" required>
                    <small id="prenomHelp" class="form-text text-muted">Veuillez inscrire votre prénom</small>
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="EmailDemo">Adresse e-mail *</label>
                    <input type="email" name="email_user" class="form-control" id="EmailDemo" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">Veuillez inscrire votre email, nous vous enverrons un mail de confirmation</small>
                    <br><br><br><br>
                </div>
                <div class="form-group">
                    <label for="passDemo">Mot de passe *</label>
                    <input type="password" name="mot_de_passe" class="form-control" id="passDemo" aria-describedby="passHelp" placeholder="Password" required>
                    <small id="passHelp" class="form-text text-muted">Il doit avoir au moins 8 caractères</small>
                    <br><br><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="CheckDemo">
                    <label class="form-check-label" for="CheckDemo">Agree with Terms & Conditions?</label>
                    <br><br><br>
                </div>
                <button type="submit" class="btn btn-success">Créer un compte</button> <br><br>
                </form>
                <br>
               
                  <p class="text-black-50 mb-0">Déjà inscrit ? <a href="formConnexion.php">Connectez-vous</a></p>
                <br>
            </div>
          </div>
        </div>
<?php require 'footer.html' ?>