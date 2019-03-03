<?php 
function makeInput_Value ($type, $value) {
	echo "<input type=$type name=$value><br>";
}
function makeInput_Name ($type, $name, $label) {
	echo "$label <input type=$type name=$name><br>";
}
function makeInput_NameValue ($type, $name, $value, $label) {
	echo "$label <input type=$type name=$name value=$value><br>";
}

function StartForm ($method,$action){
	echo "<form method=$method action=$action >";
}

function StartField($legend){
	echo "<fieldset><legend>$legend</legend>";
}

function EndField(){
	echo "</fieldset>";
}

function EndForm (){
	echo "</form>";
}

?>