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
        <h1>Sujet 2 - Exercice 2</h1>
            <?php
            include('../../Outils/outils.php');

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
</html>