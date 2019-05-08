<?php
echo "rapport d'erreurs préconfiguré : ".error_reporting()."<br/>";
error_reporting(~E_WARNING);
$a = 2 / 0;
echo 'division par 0<br/>';
error_reporting(~E_NOTICE);
echo $b;
echo 'variable indéfinie<br/>';
error_reporting(~E_ALL);
require "nowhere.file";
echo "ne s'affichera pas<br/>";
?>