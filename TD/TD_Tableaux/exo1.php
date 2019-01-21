<?php

$arr Array(
	[Dupont] => Array( [0] => Paul [1] => Paris [2] => 27)
	[Schmoll] => Array( [0] => Kirk [1] => Berlin [2] => 35)
	[Smith] => Array([0] => Stan [1] => Londre [2] => 45)
)

foreach ($tab as $cle => $valeur) {
	echo "<b>Element $cle :</b><br />";
	foreach ($valeur as $cle2 => $val) {
		echo " $cle2 : ",$val,"<br />";
	}
}

?>