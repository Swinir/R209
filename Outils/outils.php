<?php
function debug ($var){
    echo "<pre>\n";
    print_r($var);
    echo "</pre>\n";
}

function listeRep($unRep) {
    $allFic=array();
    if (is_dir($unRep) == FALSE) {
        echo "{$unRep} n'est pas un répertoire !";
    }
    else {
        $rep = opendir($unRep);
        if ($rep == FALSE) {
            echo "Impossible d'ouvrir le répertoire {$unRep}";
        }
        else {
            while (($fic = readdir($rep)) == TRUE) {
                if ($fic != "." and $fic != ".." and $fic != ".idea" and $fic != ".DS_Store" and $fic != "index.php" and $fic != ".htaccess"){
                    $allFic[]=$fic;
                }
            }
            closedir($rep);
            sort($allFic);
        }
    }
    return $allFic;
}

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
?>