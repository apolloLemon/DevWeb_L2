<?php
	$age = "84";
	$motif = "/^([0-9]{1,2})$/";

	if preg_match($motif,$age) {
		echo "$age est un age valide <br />";
		return true;
	} else {
		echo "$age est un age invalide <br />";
		return false;
	}

?>