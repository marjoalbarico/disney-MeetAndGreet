<?php

// page contenant les diff�rentes fonctions d'acc�s � la base de donn�es

//_______________________________________________________________
function insere_inscription($prenom, $nom, $mail, $personnage, $numbillet, $date) // insere le texte dans la base de donn�es
{
	include '../config/param_connexion.php'; // fichier des param�tres de connexion qui donne $lien_base
	$nb_lignes=0; 					// initialisation de la variable � z�ro
	
	// Requete d'insertion MYSQL. 
	$requete= "INSERT INTO inscription (prenom, nom, mail, personnage, numbillet, date) VALUES ('$prenom', '$nom', '$mail', '$personnage', '$numbillet', '$date');";

	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_bdd=mysqli_query($lien_base, "$requete");
	
	if($reponse_bdd == false) // si false : impossible d'ex�cuter la requ�te INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die(); // arr�t apr�s erreur
	}
	else // insert r�ussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affect�es (normalement 1 ligne ins�r�e)
	}

	return $nb_lignes ; // renvoie le nb de lignes ins�r�es : normalement 1


 } 
//_______________________________________________________________
?>

