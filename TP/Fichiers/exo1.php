<?php 
$fname = "log.exo1";
$t = time();
$t = date("d/M H:m:s",$t);
$f = fopen($fname,"a+");
flock($f, LOCK_EX);
fwrite($f,$t."\n");
flock($f, LOCK_UN);
fclose($f);
?>