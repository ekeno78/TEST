<?php

require 'index.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //extract($_POST);
    
    $identifiant = $_POST['Identifiant'];
    $email = $_POST['EmailUtilisateur'];
    $password = $_POST['PasswdUtilisateur'];

    $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES (0, :Identifiant, :EmailUtilisateur, :PasswdUtilisateur)");
    $requete->execute(
        array(
         "Identifiant"=> $identifiant,
         "EmailUtilisateur"=> $email,
        "PasswdUtilisateur"=> $password
        )    
        );
        header("location: index.html");
}

?>