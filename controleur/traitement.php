<?php

// recuperation des variables du formulaire 
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$mail=$_POST["mail"];
$personnage=$_POST["personnage"];
$numbillet=$_POST["numbillet"];
$date=$_POST["date"];

// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($prenom) || empty($nom) || empty($mail) || empty($personnage)  || empty($date))
{
	$message_erreur="Le champ texte est vide. Veuillez recommencer.".$prenom.$nom.$mail.$personnage;

	// redirection vers la page vue erreur
	header("Location: ../vue/vue_formulaire_erreur.php?erreur=$message_erreur");
	exit(); // interruption après redirection
}
else // $prenom, $nom, $mail, $personnage, $numbillet et $date sont corrects  
{
	include '../modele/fonctions.php'; // fichier externe contenant les fonctions d'accès à la base de données

	$nb_lignes=insere_inscription($prenom, $nom, $mail, $personnage, $numbillet, $date); // appel de fonction d'insertion (couche Modele)

	header("Location:../vue/vue_formulaire_ok.php?nb=$nb_lignes"); // page de confirmation
	exit(); // interruption après redirection
	
} // fin if 


?>
