<?php
//Création de la fonction de validation
function validhttp($ch)
{
    $modele="/^(www)\.([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)/";
    $ch1=strtolower($ch);
    if (preg_match($modele, $ch1))
    {
        echo "$ch est valide <br />";
        return TRUE;
    }
    else
    {
        echo "$ch est invalide <br />";
        return FALSE;
    }
}
//Utilisation de la fonction de validation
$url1="www.univ-angers.fr";
$url2="www.info.ua.fr";
$url3="www.49_info.ua.fr";
$url4="WWW.info.ua.fr";
$url5="www*info.ua.fr";
$url6="www.info;ua.fr";
$url7="www.info.ua.france";
$url8="www.info.ua.ubl.fr";
validhttp($url1);
validhttp($url2);
validhttp($url3);
validhttp($url4);
validhttp($url5);
validhttp($url6);
validhttp($url7);
validhttp($url8);
?>