<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css">
		<title>M2105 - Sujet 2 - Exo 1</title>
	</head>
    <!-- L'en-tête -->
    <header>
        <p>Module M2105 : Web Dynamique</p>
    </header>
    <?php include('../../menu.php');?>
    <section>
        <h1>Sujet 2 - Exercice 1</h1>

            <?php
            include('../../Outils/outils.php');

            $test = "test";
            debug($test);
            $tableau_seq[0]="test1";$tableau_seq[1]="test2";$tableau_seq[2]="test3";
            debug($tableau_seq);
            $t_assos['fr']="france"; $t_assos['it']="italie";
            debug($t_assos);
            ?>
    </section>
</html>