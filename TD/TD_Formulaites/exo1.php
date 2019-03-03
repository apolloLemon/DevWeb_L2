<?php 
echo "<table>";
echo "<caption><b>Confirmation</b></caption>";
foreach($_POST as $cle=>$val){
	echo "<tr><td> $cle : &nbsp; </td><td>".stripslashes($val)."</td></tr>";
}
echo "</table>";
?>