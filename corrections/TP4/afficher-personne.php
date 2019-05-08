<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Personne recherchée</title>
<style>
table, td, th {
	border: 1px solid green;
	border-collapse: collapse;
}

td {
	width: 100px;
}
</style>
</head>
<body>
<?php
include ("connexpdo.inc.php");
$idcom = connexpdo("l2_tp_sportifs");
if (! empty($_GET["nom"])) {
    $nom = urldecode($_GET["nom"]);
    $query = "SELECT personne.nom AS Nom, personne.prenom AS Prénom, sport.design AS Sport FROM personne, pratique, sport WHERE personne.nom LIKE '$nom' AND personne.id_personne=pratique.id_personne AND pratique.id_sport=sport.id_sport";
    try {
        $str = "<table>";
        $result = $idcom->query($query);
        $r = 1;
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            if ($r == 1) {
                $str .= "<tr>";
                foreach ($row as $key => $val) {
                    $str .= "<th> $key </th>";
                }
                $str .= "</tr>";
                $r ++;
            }
            $str .= "<tr>";
            foreach ($row as $val) {
                $str .= "<td> $val </td>";
            }
            $str .= "</tr>";
        }
        echo $str . "</table>";
    } catch (PDOException $e) {
        displayException($e);
        exit();
    }
}
$idcom = null;
?>
</body>
</html>