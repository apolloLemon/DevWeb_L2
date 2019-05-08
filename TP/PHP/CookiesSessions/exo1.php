<?php 
	session_start();
	if ((isset($_POST["bg"])) && (isset($_POST["ft"]))) {
		$_SESSION["bg-color"]=$_POST['bg'];
		$_SESSION["color"]=$_POST['ft'];
		setcookie("bg-color",$_POST['bg'],time()+30);
		setcookie("color",$_POST['ft'],time()+30);
	}	
?>

<form action="" method="post" style="background-color: <?= $_SESSION["bg-color"] ?>; color:<?= $_SESSION["color"] ?>;">
	<fieldset>
		<legend>
			Choisissez vos couleurs
		</legend>
		Couleur Fond <input type="text" name="bg"> <br>
		Couleur Text <input type="text" name="ft"> <br>

		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
		<br>
		<a href="page2.html">Lien vers page 2</a>
	</fieldset>
</form>


<p style=":<?php  ?>"