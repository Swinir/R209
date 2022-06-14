<?php

include("../Connexion/base.php");
$montant=$_POST['montant'];
$nom_devise=$_POST['devise'];
$sql = "UPDATE EURO SET valeur = :montant WHERE devise = '$nom_devise'"; // Stocke le code SQL de la requête
$req = $bd->prepare($sql); // Requête préparée
$req->execute(); // Requête exécutée
$req->closeCursor(); // Requête détruite
sleep(1);
header('Location:../Connexion/index.php');
?>