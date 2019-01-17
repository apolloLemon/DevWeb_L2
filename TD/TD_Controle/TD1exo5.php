<?php
$nb=789

$coup=0

while($x!=$nb){
	$x=rand(0,999);
	$coup++;
}
echo $nb," trouve' en ",$coup," coups";