<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css">
		<title>M2105 - Sujet 3 - Exo 1</title>
	</head>
    <!-- L'en-tête -->
    <header>
        <p>Module M2105 : Web Dynamique</p>
    </header>
    <?php include('../../menu.php');?>
    <section>
        <h1>Sujet 3 - Exercice 1</h1>
        <h2>Contenu de mon répertoire R209 : </h2>
            <?php
            include('../../Outils/outils.php');
            $unRep = "../..";
            $listrep_fin=listeRep($unRep);
            echo "<ul>\n";
            foreach ($listrep_fin as $val){
                    echo "<li>{$val}</li>\n";
            }
            echo "</ul>\n"
            ?>
    </section>
</html>