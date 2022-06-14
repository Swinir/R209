<!DOCTYPE HTML>
<html lang="fr">
<?php
$nomRep=explode('/',$_SERVER['PHP_SELF'])[4];
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Outils/style.css">
    <title>M2105 - <?php echo $nomRep; ?></title>
</head>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>
<?php include('../menu.php');?>
<section>
    <h1>
        <?php
        echo "$nomRep";
        ?>
    </h1>
    <?php
    $unRep = ".";
    $listrep_fin=listeRep($unRep);
    echo "<ul>\n";
    foreach ($listrep_fin as $val){
        echo "<li>Voir le répertoire : <a href='{$val}'>{$val}</a></li>\n";
    }
    echo "</ul>\n"
    ?>
</section>
</html>
