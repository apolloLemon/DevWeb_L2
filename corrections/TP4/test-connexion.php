<?php
include ("connexpdo.inc.php");

try {
    $objdb = connexpdo("l2_tp_spoZZrtifs");
    $requete = "SELECT * FROM personne";
    $result = $objdb->query($requete);
    var_dump($result);
} catch (PDOException $e) {
    displayException($e);
}
?>