<html>
	<head>
		 <title>Disneyland Paris</title>
		<meta NAME="Author" CONTENT="Brodard">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="../style.css" type="text/css" rel="stylesheet" media="all">
		<link href='https://fonts.googleapis.com/css?family=Euphoria Script' rel='stylesheet'>
	</head>

		<!-- ci-dessous traitement du retour d'information après insertion -->

	<body background ="/base_mvc_projet/vue/images/background3.jpg">
     <a href="accueil.html"><img src ="/base_mvc_projet/vue/images/logowhite.png" class="logo"></a>
        <div class="topnav" id="myTopnav">
          <a href="formulaire.html">Meet & Greet</a> <!--on peut utiliser li/lu aussi-->
          <a href="#parcsetbillets">Parcs et Billets</a>
          <a href="#hebergements">Hébergements</a>
          <a href="#avoiretafaire">À voir et à faire</a>
          <a href="#Offres">Offres</a>
      <a href="#Transport">Transport</a>
      <a href="#Aide">Aide</a>
        </div>
		<?php
		// récupération du nombre de lignes traitées - dans le cas où on est après une insertion
			$nb=$_GET["nb"]; // récupère la valeur transmise par url

			echo "<p class='resultat'>Confirmation de la résérvation<br />
			On vous confirme la résérvation de votre shooting photo avec votre personnage Disney<br /></p>";
		?>
		<!-- Lien pour retourner à la page initiale -->
		<a href="../index.php">Retour accueil</a>
	<body>
</html>
