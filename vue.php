<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="hn.css">
	<link href="https://fonts.googleapis.com/css?family=Asap|Baloo|Hind|Inder|Josefin+Sans|Mirza|Open+Sans|Roboto|Source+Sans+Pro|Work+Sans" rel="stylesheet">
	<title>HN AUTO</title>
</head>

<body>
<header>
	<nav>	<!--défini le menu principal de navigation-->
		<ul id="logo_titre">
			<li class="logo"> <a href="?accueil"> <img src="icon.png" alt="logo hn auto"></a> </li>
			<li class="titre_menu">HN AUTO</li>
		</ul>

		<ul id="menu">
			<li> <a href="?accueil" class="text_menu">Accueil</a> </li>
			<li> <a href="?vehicules" class="text_menu">Véhicules</a> </li>
			<li> <a href="?contact" class="text_menu">Contact</a> </li>
		</ul>
	</nav>
</header>

<div class="section1">
	<p class="text1"><u>H.N AUTO</u></br>Véhicules d'occassion</br>à bas prix</p>
</div>

<div>
	<?php
	if(isset($_GET["accueil"]))
	{
		include("accueil.php");
	}

	if(isset($_GET["vehicules"]))
	{
		include("vehicules.php");
	}

	if(isset($_GET["contact"]))
	{
		include("contact.php");
	}
	?>
</div>

<div class="section2">
	<div class="l1">
		<b><p class="text2">Garantie 6 mois</p></b>
		<img class="image_section2" src="icon_6.png" alt="icon_6">
		<p class="text4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

	<div class="l1">
		<b><p class="text2">Facture d'entretient</p></b>
		<img class="image_section2" src="icon_carnet_entretient.png" alt="icon_carnet_entretient">
		<p class="text4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

	<div class="l1">
		<b><p class="text2">Aucun frais à prévoir</p></b>
		<img class="image_section2" src="icon_euro.png" alt="icon_euro">
		<p class="text4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
	

</div>

<div class="section3"> <p class="titre_section3">VOITURES D'OCCASION À PETIT PRIX</p>
	<div class="containt">
			<div class="conteneur">
			    <div class="mini_conteneur1"><img class="image_voiture" src="twingo2.jpg" alt="twingo2"></div>
			    <div class="mini_conteneur2">
			    	<h3 class="titre_photo">Twingo 2</h3>
			    	<center><a href="#" class="bouton">Détails</a></center>
			    </div>	
			</div>

			<div class="conteneur">
			    <div class="mini_conteneur1"><img class="image_voiture" src="307.jpg" alt="307"></div>
			    <div class="mini_conteneur2">
			    	<h3 class="titre_photo">Peugeot 307</h3>
			    	<center><a href="#" class="bouton">Détails</a></center>
			    </div>
		    </div>

			<div class="conteneur">
				<div class="mini_conteneur1"><img class="image_voiture" src="ford.jpg" alt="ford"></div>
			    <div class="mini_conteneur2">
			    	<h3 class="titre_photo">Ford fiesta</h3>
			    	<center><a href="#" class="bouton">Détails</a></center>
			    </div>
			</div>
	</div>
</div>

<div class="section4"><p class='titre_section4'>NOUS CONTACTER</p>
	<form method="post" action=".php">
	   <p>
	       <input type="text" name="nom" placeholder="nom" id="form1" />
	       <input type="email" name="email" placeholder="email" id="form1" />
	       <input type="text" name="objet" placeholder="objet" id="form1" />
	   </p>

	   <p>
	       <textarea name="message" placeholder="votre message" id="form2"></textarea>
	   </p>

	   <input type="submit" value="Envoyer" id="bouton" />

	</form>
</div>


</body>

<footer>
	<div class="l1">
		<img class="image_footer" src="envelope.png" alt="">
		<p class="text_footer">hnauto@hotmail.fr</p>
	</div>

	<div class="l1">
		<img class="image_footer" src="telephone.png" alt="">
		<p class="text_footer">06 00 00 00 00</p>
	</div>

	<div class="l1">
		<p class="text_footer">réalisé par Balamini Diaby et Bakary Coly</p>
	</div>
</div>

</footer>