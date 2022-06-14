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
    <h1>Sujet 1 - Exercice 2</h1>

    <?php
    date_default_timezone_set('UTC');
    $date = date('d/m/y');
    $user = htmlspecialchars($_POST['login']);
    $password = $_POST['mdp'];
    if ($user == 'boss' && $password == 'boss'){
        echo "Bonjour $user ! Nous sommes le $date";}
    else {
        echo "Tu dois être authentifié pour connaître la date ! Retourne au <a href=index.html>forumulaire</a>.";
    }
    ?>

</section>
</body>
</html>



