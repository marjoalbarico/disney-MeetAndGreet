<?php
	// param�tres de connexion, � changer en fonction du serveur et de la base utilis�e
	$monserveur = "localhost";	// adresse du serveur sql que vous utilisez. ex : "sql.free.fr" ; "localhost" sur WAMP 
	$monlogin = "root";	// login de la base de donn�es. "root" sur WAMP en local	
	$monpass = "";		// mot de passe de la base de donn�es. vide sur WAMP en local
	$mabase="disney";	// nom de la base ;suivant ce que vous avez cr�� comme base dans WAMP)

	// connexion au SGBD
	$lien_base= mysqli_connect($monserveur,$monlogin,$monpass,$mabase) ;
	
?>
