<?php
session_start();
include "ConnectBD.php";



$pemail=$_POST["email"];
$mdp=$_POST["mdp"];
$sql= "SELECT nom FROM admin WHERE email_admin= :pemail and mot_de_passe= :mot_de_passe";

try {
    $resultat = $cnx->prepare($sql);
    $resultat -> execute(array(":pemail"=>$pemail, ":mot_de_passe"=>$mdp));
    $tabloResultat=$resultat->fetch(PDO::FETCH_ASSOC);
    if (empty($tabloResultat)){
        header("Location: adminconnexion.php");
    }
    else{
        $_SESSION["admin"]=1;
        header("Location: Bienvenueadmin.php");  
        
    }
}    
catch(PDOException $e) { // gestion des erreurs
    echo"ERREUR dans la modification ".$e->getMessage();
}



?>