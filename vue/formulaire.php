<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		 <title>Disneyland Paris</title>
		<meta NAME="Author" CONTENT="Brodard">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="../style.css" type="text/css" rel="stylesheet" media="all">
	</head>
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
   
    <div class="first-column">
	Vous venez à DisneyLand et vous ne voulez pas repartir sans votre photo avec votre personnage Disney préféré ? Ne chercher plus aprés eux et donnez leurs rendez vous pour un  shooting personnalisé.
	Vous aurez la possiblité de choisir l'heure ainsi que le lieu avec le personnage de votre choix. Aprés une séance shooting photo personnalisé devant le chateau avec Cendrillon, ou encore devant le jardin 
	fleurit avec Jasmine, repartez avec vos souvenirs immortalisé.
    </div>

<div class="second-column">
  <h3>Formulaire d'inscription</h3>
<div class="container">
  <form action="/base_mvc_projet/controleur/traitement.php" method="post">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom">

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom">
	
	<label for="mail">Mail:</label>
    <input type="text" id="mail" name="mail">

    <label for="Personnage">Personnage:</label>
    <select id="Personnage" name="personnage">
      <option value="Minnie">Minnie</option>
      <option value="Mickey">Mickey</option>
      <option value="Cendrillon">Cendrillon</option>
    </select>

    <label for="numbillet">No. du billet:</label>
    <input type="text" id="numbillet" name="numbillet">
	
	<label for="date">Date:</label>
    <input type="date" id="date" name="date">

    <br><br><input type="submit" value="Submit">
  </form>
</div>
</div>
  </body>
</html>
