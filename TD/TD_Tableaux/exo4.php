<?php 
function initmaj($tab){
	foreach($tab as $ind => $val){
		$tab[$ind] = ucfirst(strtolower($val));
	}
}

$tabch = array("AzerToTO","Sous peAu","sARtHES jp");

initmaj($tabch);
print_r($tabch)

?>