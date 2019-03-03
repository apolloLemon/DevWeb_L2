<?php 
function alertString (string $string) : void {
	echo '<script language="javascript">';
	echo 'alert("'.$string.'")';
	echo '</script>';
}

function alerte($ch){
	echo "<script type=\"text/javascript\">alert('$ch'); </script>";
	return TRUE;
}

#alertString("Bob");

if(alerte("Bonjour a' tous"))
	echo "La fonction alertre fonctionne bien";
?>