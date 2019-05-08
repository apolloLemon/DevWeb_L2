<?php 

$tab = array("a1@abc.com","a2@abc.com","x1@xyz.fr","x2@xyz.fr");

$domaine = [];

foreach($tab as $val){
	$dom = explode("@",$val);
	$domaine[]=$dom[1];
}

$stat = array_count_values($domaine);

$total = count($tab);

$pourcent = [];
foreach ($stat as $fourn => $nb) {
	$pourcent[$fourn] = $nb / $total *100;
	echo "Fournisseur d'acces : $fourn =",round($pourcent[$fourn],2)," % <br />";
}

?>