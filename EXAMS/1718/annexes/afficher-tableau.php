<?php

// Génération d'une cellule d'en-tête de tableau HTML
function afficheCelluleEntete($value)
{
    echo "<th>$value</th>";
}

// Génération d'une cellule de tableau HTML
function afficheCellule($value)
{
    echo "<td>$value</td>";
}

// Génération de tableau HTML
// $records : tableau de tableaux associatifs modélisant
// chacun un enregistrement d'une table de base de données
// et associant nom de colonne et valeur.
function affiche_tableau(array $records)
{
    echo "<table>";
    echo "<thead>";
    $keys = array_keys($records[0]);
    array_walk($keys, "afficheCelluleEntete");
    echo "</thead>";
    foreach ($records as $row) {
        echo "<tr>";
        array_walk($row, "afficheCellule");
        echo "</tr>";
    }
    echo "</table>";
}
?>