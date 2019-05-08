<?php 

$array = [["Article","Prix"],[A,1],[B,2],[C,3],[D,3],[E,4],[F,5],[G,2],[H,1]];

echo '<table>';
foreach($array as $linges){
	echo "<tr><td>".$linges[0]."</td><td>".$linges[1]."</tr>";
}
echo "</table>";

?>