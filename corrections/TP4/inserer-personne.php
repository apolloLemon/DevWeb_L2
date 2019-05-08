<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez vos coordonnées</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1"
		method="post" enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Vos coordonnées</b>
			</legend>
			<table>
				<tr>
					<td>Nom :</td>
					<td><input type="text" name="nom"
						<?php if(!empty($_POST['nom'])) echo "value=\"{$_POST['nom']}\""; else echo "value=\"Loeb\""; ?>
						size="20" maxlength="20" /></td>
				</tr>
				<tr>
					<td>Prénom :</td>
					<td><input type="text" name="prenom"
						<?php if(!empty($_POST['prenom'])) echo "value=\"{$_POST['prenom']}\""; else echo "value=\"Sébastien\""; ?>
						size="20" maxlength="20" /></td>
				</tr>
				<tr>
					<td>Département:</td>
					<td><input type="number" name="depart" min="01" max="99"
						<?php if(!empty($_POST['depart'])) echo "value=\"{$_POST['depart']}\""; else echo "value=\"67\""; ?>
						size="2" maxlength="2" /></td>
				</tr>
				<tr>
					<td>Mail :</td>
					<td><input type="email" name="mail"
						<?php if(!empty($_POST['mail'])) echo "value=\"{$_POST['mail']}\""; else echo "value=\"loeb@mille.lacs\""; ?>
						size="20" maxlength="50" /></td>
				</tr>
				<tr><td colspan="2"><input type="submit" name="envoi" value="Envoyer" /></td></tr>
			</table>
		</fieldset>
	</form>
<?php
require ("connexpdo.inc.php");
$idcom = connexpdo("l2_tp_sportifs");
if (! empty($_POST['nom']) && ! empty($_POST['depart']) && ! empty($_POST['mail'])) {
    try {
        $nom = $idcom->quote($_POST['nom']);
        $prenom = $idcom->quote($_POST['prenom']) ?? "--";
        $depart = $idcom->quote($_POST['depart']);
        $mail = $idcom->quote($_POST['mail']);
        $query = "INSERT INTO personne (nom,prenom,depart,mail) VALUES ($nom,$prenom,$depart,$mail)";
        $nb = $idcom->exec($query);
        if ($nb != 1) {
            alert("Erreur : \"$idcom->errorCode()\"");
        } else {
            // A éviter : $id_pers = $idcom->lastInsertId();
            $stt = $idcom->query("SELECT max(id_personne) FROM personne");
            $id_pers = $stt->fetch(PDO::FETCH_NUM)[0];
            alert("Vous êtes enregistrés avec le numéro $id_pers !");
        }
    } catch (PDOException $e) {
        displayException($e);
        exit();
    }
} else {
    echo "<h3>Formulaire à compléter!</h3>";
}
$idcom = null;
?>
</body>
</html>
