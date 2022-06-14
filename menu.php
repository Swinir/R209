<?php
include "Outils/outils.php";

$unRep = "/home/users/etudiant/b/bj110249/www/ext/R209";
$listrep_temp=listeRep($unRep);
$counter=1;
$listrep_fin_menu=array();
foreach ($listrep_temp as $val){
    if ($val == "Sujet{$counter}"){
        $listrep_fin_menu[]= $val;
        $counter = $counter + 1;
    }
}

echo "<nav>";
echo "<ul><li><a href=\"http://isis.unice.fr/~bj110249/ext/R209/\">Accueil</a></li></ul>";
foreach ($listrep_fin_menu as $val){
    $lowercase_val = strtolower($val);
    echo "<ul>{$val}";
    echo "<li> <a href=\"http://isis.unice.fr/~escazut/ext/R209/Exercices/{$lowercase_val}.php\">Énoncé</a></li>";
    echo "<li><a href=\"http://isis.unice.fr/~bj110249/ext/R209/{$val}/\">Réponse</a></li></ul>\n";
}
 echo "<ul><li><a href=\"http://isis.unice.fr/~bj110249/ext/R209/Projet/\">Projet</a></li></ul>\n";
 echo "</nav>";
?>