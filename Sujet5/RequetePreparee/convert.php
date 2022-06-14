<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../Outils/style.css">
    <title>M2105 - Sujet 2 - Exo 2</title>
</head>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>
<?php include('../../menu.php');?>
<body>
<section>
    <h1>Sujet 5 - Exercice 2</h1>
<?php
include("../Connexion/base.php");
$sql = "SELECT devise,valeur FROM EURO"; // Stocke le code SQL de la requête
$req = $bd->prepare ($sql); // Requête préparée
$req->execute (); // Requête exécutée
$lesEnreg = $req->fetchall (); // Requête exécutée
$req->closeCursor (); // Requête détruite


    $montant=$_POST['montant'];
    $nom_devise=$_POST['devise'];

foreach ($lesEnreg as $array){
    if ($nom_devise == $array["devise"]){
        $coeff = $array["valeur"];
    }
}

    $resultat=$coeff*$montant;

    echo "$montant $nom_devise = $resultat €";
    ?>
</section>
</body>
</html>
