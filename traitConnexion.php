<?php
session_start();
include "ConnectBD.php";

$_SESSION["email"]=$_POST["email"];
$pemail=$_POST["email"];
$mdp=$_POST["mdp"];
$sql= "SELECT nom FROM user WHERE email_user = :pemail and mot_de_passe=:mdp";

try {
    $resultat = $cnx->prepare($sql);
    $resultat -> execute(array(":pemail"=>$pemail, ":mdp" => $mdp));
    $tabloResultat=$resultat->fetch(PDO::FETCH_ASSOC);
    if (empty($tabloResultat)){
        header("Location: formConnexion.php");
    }
    else{
        $_SESSION["admin"]=2;
        header("Location: Bienvenueuser.php");  
        
    }
}    
catch(PDOException $e) { // gestion des erreurs
    echo"ERREUR dans la modification ".$e->getMessage();
}



?>