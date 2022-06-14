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
    <?php include('../../menu.php');?>
    <body>
    <section>
        <h1>Sujet 2 - Exercice 3</h1>
            <?php
            include('../../Outils/outils.php');

            echo "<ul>\n";
            foreach ($euro as $cle=>$val){
                    echo "<li>1 {$cle} = {$val} €</li>\n";
            }
            echo "</ul>\n"
            ?>
    <form method="POST" action="./convert.php">
        <br>
        <label for="montant">Choisissez combien vous voulez convertir :</label>
        <input id="montant" name="montant" type="text" required autofocus/>
        <br>
        <p>Choisissez dans quel devise vous voulez le convertir :</p>

        <select name="devise" id="devise">
        <?php
        foreach ($euro as $cle=>$val){
            echo "<option value='$cle'>$cle</option>\n";
        }
        ?>
        </select>
        <button id="convertir" name="convertir" type="submit" value="convertir">Convertir</button>
    </form>
    </section>
    </body>
</html>