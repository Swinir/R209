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
    <section>
        <h1>Sujet 5 - Exercice 2</h1>
            <?php

            include("../Connexion/base.php");
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
    <form method="POST" action="convert.php">
        <br>
        <label for="montant">Choisissez combien vous voulez convertir :</label>
        <input id="montant" name="montant" type="text" required autofocus/>
        <br>
        <p>Choisissez dans quel devise vous voulez le convertir :</p>

        <select name="devise" id="devise">
        <?php
        foreach ($lesEnreg as $array){
            $val = $array["devise"];
            echo "<option value='$val'>$val</option>\n";
        }
        ?>
        </select>
        <button id="convertir" name="convertir" type="submit" value="convertir">Convertir</button>
    </form>
    </section>
</html>