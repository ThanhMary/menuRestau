<!doctype html>
<html lang="fr">
      <HEAD>
		<meta charset="utf-8">
		<TITLE> Traitement Formulaire</TITLE>
		<link rel="stylesheet" type="text/css" href="pagestyle.css">
     </HEAD>
	<BODY>
	<?php 
	/* nom du script: traitement_formulaire.php
	Description:  reçoit les éléments de formulaire.html_entity_decode
	Date: 09/03/2017
	*/
	// print_r ($_POST);
	$lenom = $_POST['Votre nom'];
	$leprenom = $_POST['Votre prenom'];
	$adresse=$_POST['Votre Adresse']
	
	echo "HELLO $lenom $leprenom";
	
	?>
	
	</BODY>