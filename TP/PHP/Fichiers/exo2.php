<html>
	<body>
		<form method="post" action="">
			<fieldset>
				<legend>Inscrivez vous</legend>
				Nom:    <input type="text" name="nom"> <br>
				Prenom: <input type="text" name="prnm"> <br>
				Groupe: <select name="group">
					<option value="i1">I1</option>
					<option value="i2">I2</option>
					<option value="i3">I3</option>
					<option value="i4">I4</option>
					<option value="i5">I5</option>
					<option value="i6">I6</option>
				</select> <br>
				<input type="submit" value="S'inscrire">
				<input type="submit" value="Afficher" name="afficher">
			</fieldset>
		</form>
	</body>
</html>

<?php 
	$nom="";
	$prnm="";
	$group="";
	if ((isset($_POST["nom"])) && $_POST["nom"]!="" && (isset($_POST["prnm"])) && (isset($_POST["group"]))) {
		$nom= $_POST["nom"];
		$prnm= $_POST["prnm"];
		$group= $_POST["group"];
		
		$fname = "exo2.csv";
		$f = fopen($fname,"a+");
		flock($f, LOCK_EX);
		fwrite($f,$nom.",".$prnm.",".$group."\n");
		flock($f, LOCK_UN);
		fclose($f);
	}

	if (isset($_POST["afficher"])) {
		$fname = "exo2.csv";
		$f = fopen($fname,"r");
		

		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Nom</th>";
		echo "<th>Prenom</th>";
		echo "<th>Groupe</th>";
		echo "</tr>";

		$id = 0;
		while(($data = fgetcsv($f,1000,",")) !== FALSE){
			$id++;
			echo "<tr>";
			echo "<td>$id</td>";
			for($j=0;$j<count($data);$j++){
				echo "<td>".$data[$j]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>