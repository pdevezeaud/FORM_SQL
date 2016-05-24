<?php

	$prenom = $nom = $pseudo = ""; 
	function securisation ($donnees){
		$donnees = trim($donnees);
		$donnees = stripcslashes($donnees);
		$donnees = strip_tags($donnees);
		return $donnees
	}
	$prenom = securisation($_POST['prenom']);
	$nom = securisation($_POST['nom']);
	$pseudo = securisation($_POST['pseudo']);


 ?>