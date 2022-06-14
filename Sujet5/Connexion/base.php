<?php
try {
    $bd = new PDO ( "mysql:host=localhost;dbname=bj110249",
        "bj110249", "bj1102493e6a" );
    $bd->exec('SET NAMES utf8');
}
catch (Exception $e) {
    die ("Erreur: Connexion à la base impossible");
}
?>