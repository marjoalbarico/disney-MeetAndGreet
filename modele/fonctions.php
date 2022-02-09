<?php

// page contenant les différentes fonctions d'accès à la base de données

//_______________________________________________________________
function insere_inscription($prenom, $nom, $mail, $personnage, $numbillet, $date) // insere le texte dans la base de données
{
	include '../config/param_connexion.php'; // fichier des paramètres de connexion qui donne $lien_base
	$nb_lignes=0; 					// initialisation de la variable à zéro
	
	// Requete d'insertion MYSQL. 
	$requete= "INSERT INTO inscription (prenom, nom, mail, personnage, numbillet, date) VALUES ('$prenom', '$nom', '$mail', '$personnage', '$numbillet', '$date');";

	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_bdd=mysqli_query($lien_base, "$requete");
	
	if($reponse_bdd == false) // si false : impossible d'exécuter la requête INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die(); // arrêt après erreur
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
	}

	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1


 } 
//_______________________________________________________________
?>

