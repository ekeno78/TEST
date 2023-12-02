
<center><h1>REPERTOIRE DES POISSONS</h1></center>

<?php

//echo "hello world !";


$servername = "localhost";
$username = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=$servername; dbname=gotit", $username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connexion réussie ☺";

    $sql = "SELECT IdPoisson, NomPoisson, NomLatinPoisson, DescritptionPoisson FROM poisson";
    $result = $bdd->query($sql);

    echo "<table class='table table-bordered'>";
    echo "<tr>";
    echo "<th><p class=''>Id</p></th>";
    echo "<th><p class=''>Poisson</p></th>";
    echo "<th><p class=''>Nom Latin </p></th>";
    echo "<th><p class=''>Description</p></th>";
    echo "</tr>";

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["IdPoisson"] . "</td>";
        echo "<td>" . $row["NomPoisson"] . "</td>";
        echo "<td>" . $row["NomLatinPoisson"] . "</td>";
        echo "<td>" . $row["DescritptionPoisson"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
catch(PDOException $e){
    echo "Erreur  : ".$e->getMessage();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>