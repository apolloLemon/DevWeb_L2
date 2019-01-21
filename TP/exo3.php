<?php
	$type = [true,false,1,0,-1,"1","0","-1",NULL,[],""];

	$titr = ["true","false","1","0","-1",'"1"','"0"','"-1"','NULL','[]','""'];


	echo "<table>";
	echo "<tr>";
	echo "<th>==</th>";
	for($i=0;$i<count($titr);$i++){
		echo "<th>$titr[$i]</th>";
	}
	echo "</tr>";

	for($i=0;$i<count($titr);$i++){
		echo "<tr>";
		echo "<th>$titr[$i]</th>";
		for($j=0;$j<count($titr);$j++){
			echo "<td>".(($type[$i]==$type[$j])?"True":"")."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>