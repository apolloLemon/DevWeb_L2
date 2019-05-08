<?php 
require ('form_generation.inc.php');
$cacheX= 0;
$cacheY= 0;

if ((isset($_POST["x"])) && (isset($_POST["y"]))) {
	$cacheX= $_POST['x'];
	$cacheY= $_POST['y'];
}
$result=$cacheX+$cacheY;

StartForm("post","");

makeInput_NameValue("text","x",$cacheX,"Nombre X");
makeInput_NameValue("text","y",$cacheY,"Nombre Y");
makeInput_NameValue("text","r",$result,"Resultat");
makeInput_Value("submit","plus");

EndForm();
?>