<?php
$user = htmlspecialchars($_POST['login']);
$password = $_POST['mdp'];
if ($user != 'boss' && $password != 'boss'){
    header("Location: index.php?try=1");}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../Outils/style.css">
    <title>M2105</title>
</head>
<?php include('../../menu.php');?>
<body>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>

<!-- Le contenu (1 seule section suffit) -->
<section>
    <h1>Sujet 1 - Exercice 3</h1>

    <?php
    date_default_timezone_set('UTC');
    $date = date('d/m/y');
    if ($user == 'boss' && $password == 'boss'){
        echo "Bonjour $user ! Nous sommes le $date";}
    ?>

</section>
</body>
</html>



