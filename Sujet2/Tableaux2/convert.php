<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../Outils/style.css">
    <title>M2105 - Sujet 2 - Exo 3</title>
</head>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>
<?php include('menu.php');?>
<body>
<section>
    <h1>Sujet 2 - Exercice 3</h1>
<?php
    include('../../Outils/outils.php');
    $montant=$_POST['montant'];
    $nom_devise=$_POST['devise'];

    $coeff=$euro["$nom_devise"];

    $resultat=$coeff*$montant;

    echo "$montant $nom_devise = $resultat €";
    ?>
</section>
</body>
</html>
