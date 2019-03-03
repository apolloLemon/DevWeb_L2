<?php 
require ('form_generation.inc.php');
StartForm("post","traiter.php");
StartField("Completez le formulaire");
makeInput_Name("text","nom","Votre Nom");
makeInput_Name("text","prenom","Votre Prenom");
makeInput_NameValue("radio","ville","paris","Paris");
makeInput_NameValue("radio","ville","lyon","Lyon");
EndField();
makeInput_Value("submit","Envoyer");
makeInput_Value("reset","Effacer");
EndForm();
?>