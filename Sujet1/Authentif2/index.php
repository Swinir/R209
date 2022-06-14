<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css">
		<title>M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
        <?php include('../../menu.php');?>
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<h1>Sujet 1 - Exercice 3</h1>
			<p>Veuillez vous identifier</p>
            <?php
            if (isset($_GET['try'])){
                $try = $_GET['try'];
                if ( $try == 1){
                    echo "Login ou mot de passe incorrect. Veuillez recommencer.";
                }
            }
            ?>
			<form method="POST" action="./connex.php">
				<p>	<label for="login">Login</label>
					<input id="login" name="login" type="text" required autofocus/>
				</p>
				<p>	<label for="mdp">Mot de passe</label>
					<input id="mdp" name="mdp" type="password" required />
				</p>
				<p>	
					<button id="envoi" name="envoi" type="submit" value="envoi">Connnexion</button> 
				</p>
			</form>
		</section>
	</body>
</html>