<?php
date_default_timezone_set('Europe/Paris');
$date=date('d/m/y \à h:m:s');
$last_cookie = $_COOKIE['last'];
setcookie('last',$date,time()+365*24*3600);
if (empty($_COOKIE)){
    setcookie('last',$date,time()+365*24*3600);
    $first = 1;
}
else {
    $first = 0;
}
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../Outils/style.css">
    <title>M2105 - Sujet 4 - Exo 3</title>
</head>
<!-- L'en-tête -->
<header>
    <p>Module M2105 : Web Dynamique</p>
</header>
<?php include('../../menu.php');?>
<section>
    <?php
    $date=date('d/m/y \à h:m:s');
    echo "Bonjour nous sommes le $date.<br>";
    if ($first == 1){
        echo "Bienvenu c'est ta première visite";
    }
    if ($first == 0) {
        echo "Ta dernière visite sur cette page date du ". $last_cookie;}
    ?>
</html>
