<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Module M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
		
		
		<!-- Le menu inclus depuis menu.html -->
<?php
	include ("../../menu.php");
?>
		
		<!-- Le contenu de la page (1 seule section suffit) -->		
		<section>
<!-- Début du HTML généré par PHP -->
<?php	
	$chemin=explode("/",$_SERVER['PHP_SELF']);
	echo "<h1>".$chemin[count($chemin)-3]." - ".$chemin[count($chemin)-2]."</h1>\n";
?>		
<!-- Fin du HTML généré par PHP -->

			

<!------------- À COMPLÉTER ------------->

            <?php

            include ("./base.php");
            $sql = "SELECT devise,valeur FROM EURO"; // Stocke le code SQL de la requête
            $req = $bd->prepare ($sql); // Requête préparée
            $req->execute (); // Requête exécutée
            $lesEnreg = $req->fetchall (); // Requête exécutée
            $req->closeCursor (); // Requête détruite
            echo "<ul>\n";
            foreach ($lesEnreg as $array){
                $devise = $array["devise"];
                $valeur = $array["valeur"];

                echo "<li>1 $devise = $valeur €</li>";
            }
            echo "</ul>\n";
            ?>

<!--------------------------------------->


		</section>
		
	</body>
</html>