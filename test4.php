<!DOCTYPE HTML>
<html lang="fr">
<?php
$nomRep=explode('/',$_SERVER['PHP_SELF'])[4];
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Outils/style.css">
    <title>M2105 - <?php echo $nomRep; ?></title>
</head>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>
<?php include('menu.php');?>
<section>
    <h1>
        <?php
        echo "$nomRep";
        ?>
    </h1>

    <?php

    echo "<ul>";
    $listeRep = listeRep(".");
    foreach ($listeRep as $rep) {
        if ($rep != "." && $rep != "..") {
            echo "<li>$rep</li>";
            if (is_dir($rep) == TRUE) {
                $path = $rep;
                echo "<ul>";
                $listeRep2 = listeRep($path);
                foreach ($listeRep2 as $rep2) {
                    if ($rep2 != "." && $rep2 != "..") {
                        echo "<li>$rep2</li>";
                    }
                }
                echo "</ul>";
            }
        }
    }
    echo "</ul>";
    ?>

</section>
</html>
