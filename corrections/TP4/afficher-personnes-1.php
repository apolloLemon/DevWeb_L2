<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Lecture des personnes enregistrées</title>
<style>
table, td, th {
	border: 1px solid blue;
	border-collapse: collapse;
}

td {
	width: 50px;
}
</style>
</head>
<body>
<?php
include ("connexpdo.inc.php");
$idcom = connexpdo("l2_tp_sportifs");
$query = "SELECT * FROM personne ORDER BY personne.nom";
try {
    $str = "<table>";
    $result = $idcom->query($query);
    $r = 1;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if ($r == 1) {
            $str .= "<tr>";
            foreach ($row as $key => $val) {
                $str .= "<th> $key </th>";
            }
            $str .= "</tr>";
            $r ++;
        }
        $str .= "<tr>";
        $id = null;
        foreach ($row as $key => $val) {
            if ($key == "id_personne") {
                $id = $val;
            }
            if ($key == "nom") {
                $href = "afficher-personne.php?nom=".urlencode("$val");
                $str .= "<td><a href=\"$href\">$val</a></td>";
            } else {
                $str .= "<td>$val</td>";
            }
        }
        $str .= "</tr>";
    }
    echo $str . "</table>";
} catch (PDOException $e) {
    displayException($e);
    exit();
}
$idcom = null;
?>
</body>
</html>