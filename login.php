<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=$servername; dbname=gotit", $username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connexion réussie ☺";

}
catch(PDOException $e){
    echo "Erreur  : ".$e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email_utilisateur'];
    $password = $_POST['Password_utilisateur'];

    if ($email != "" && $password != "") {

        $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE Email_utilisateur = ? AND Password_utilisateur = ?");
        $req->execute([$email, $password]);
        $rep = $req->fetch(PDO::FETCH_ASSOC);

        if ($rep) {
            // Connexion réussie, l'email et le mot de passe sont ok
            echo "Vous êtes connecté !   ( page d'attente pour prouver l'établissement de la connexion )";
            //header("Location: index.html");
            exit(); 
        } else {
            // Aucun utilisateur n'a été trouvé
            echo "Email ou mot de passe incorrect...";
        }
    }
}


?>