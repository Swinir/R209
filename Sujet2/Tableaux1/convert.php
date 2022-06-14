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
    <h1>Sujet 2 - Exercice 2</h1>
<?php
    $euro=array(	'Dinar algérien' 	=> 0.00916204,
        'Franc guinéen'		=> 0.000108068,
        'Livre libanaise' 	=> 0.000479533,
        'Ringgit malais'	=> 0.224482,
        'Dirham marocain'	=> 0.0892160,
        'Euro monégasque'	=> 1,
        'Rouble russe'		=> 0.0203145,
        'Franc CFA'		=> 0.00152449,
        'Dinar tunisien'	=> 0.459187
    );

    $montant=$_POST['montant'];
    $nom_devise=$_POST['devise'];

    $coeff=$euro["$nom_devise"];

    $resultat=$coeff*$montant;

    echo "$montant $nom_devise = $resultat €";
    ?>
</section>
</body>
</html>
