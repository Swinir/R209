<?php
		session_start();
        if (!isset($_SESSION['auth'])) {
            header('Location:index.php?msg=err');
            exit();}
        elseif ((empty($_POST) OR ($_POST['login']!="boss" OR $_POST['mdp']!= "boss")) AND !isset($_SESSION['auth'])) { // Authentification KO ou tentative de fraude
            header('Location:index.php?msg=err');
            exit();}
        $_SESSION['auth']='yes';
?>
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

		<!-- Un menu -->
<?php
	include("menu.php");
?>
		
		<!-- La section -->
		<section>
			<h1>Entrée 1</h1>
			
			<p>Bla bla bla</p>
		</section>
	</body>
</html>