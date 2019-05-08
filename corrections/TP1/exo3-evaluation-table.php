<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<title>TP PHP 1 - Exercice 3</title>
<style type="text/css">
th { background-color:cyan;}
</style>
</head>
<body>
<?php
// TABLEAU DE COMPARAISON AVEC ==
$v=["TRUE"=>TRUE,
    "FALSE"=>FALSE,
    "1"=>1,
    "0"=>0,
    "-1"=>-1,
    "\"1\""=>"1",
    "\"0\""=>"0",
    "\"-1\""=>"-1",
    "NULL"=>NULL,
    "[]"=>[],
    "\"\""=>""];

function b2s(bool $x) : string {if($x) return "TRUE"; else return "";}

//Début du tableau HTML
echo "<table border=\"2\" style=\"text-align:left;border-collapse: collapse;\">";
//Création de la première ligne
echo "<tr>";
echo "<th>==</th>";
foreach($v as $k=>$i) {
    echo "<th>$k</th>";
}
echo "</tr>";
//Création du corps de la table
foreach($v as $k=>$i) {
    echo "<tr>";
    echo "<th>$k</th>";
    foreach($v as $j) {
        echo "<td>".b2s($i==$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr/>";

// SECOND TABLEAU
$f=["Expression","gettype()","empty()","is_null()","isset()"];
//Début du tableau HTML
echo "<table border=\"2\" style=\"text-align:left;border-collapse: collapse;\">";
//Création de la première ligne
echo "<tr>";
foreach($f as $i) {
    echo "<th>$i</th>";
}
echo "</tr>";
//Création du corps de la table
foreach($v as $k=>$i) {
    echo "<tr>";
    foreach($f as $j) {
        switch($j) {
            case "Expression" :
                echo "<th>$k</th>";
                break;
            case "gettype()" :
                echo "<td>".gettype($i)."</td>";
                break;
            case "empty()" :
                echo "<td>".b2s(empty($i))."</td>";
                break;
            case "is_null()" :
                echo "<td>".b2s(is_null($i))."</td>";
                break;
            case "isset()" :
                echo "<td>".b2s(isset($i))."</td>";
                break;
            default :
                break;
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>