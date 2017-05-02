<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo $title; ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="icon" type="image/png" href="assets/images/favicon.png" />
		<link rel="stylesheet"  type="text/css" href="assets/css/style.css" />
		<script type="text/javascript" src="assets/js/jquery-2.1.4.js"></script>
		<script type="text/javascript" src="assets/js/jquery1.js"></script>
</head>

<body>
<!--- Header --> 

	<div id="main">

		<?php 
		if(!isset($_SESSION['user']))
		{
		?>
			<nav>

			  <div class="nav">

			     	<ul id="nav" >	
						<li	id="logo"><a href="?cat=visiteur&module=bagpackers&action=index"><img alt="accueil" src="assets/images/logo-blanc.png"/><b>The Bagpackers</b></a></li>
						<li class="other"><a href="?cat=visiteur&module=users&action=login_user">Se connecter</a></li>
						<li class="other"><a href="?cat=visiteur&module=users&action=ajout_user">S'inscrire</a></li>
						<li class="other"><a href="?cat=visiteur&module=bagpackers&action=concept">Concept</a></li>
						<li class="other"><a href="?cat=visiteur&module=voyages&action=lire_voyages">Road Trip</a>
							<ul class="menu-voyages" >
								<li><a href="?cat=visiteur&module=voyages&action=lire_voyages">Tous les Road Trip</a></li>
								<li><a href="?cat=visiteur&module=voyages&action=lire_last_voyages">Road Trip Dernière Minute</a></li>
							</ul>
						</li>
			    	</ul>

			  	</div>
			  
			  	<div class="clear"></div>
			  	
			</nav>
		<?php }
		else
		{
		?>
			<nav>
			  <div class="nav">
			     	<ul id="nav" >
						<li	id="logo"><a href="?action=index"><img alt="logo" src="assets/images/logo-blanc.png"/><b>The Bagpackers</b></a></li>
						<li class="other"><a href="?cat=visiteur&module=users&action=deconnexion">Se déconnecter</a></li>
						<li class="other"><a href="?cat=visiteur&module=articles&action=lire_articles">Communauté</a>
							<ul class="menu-voyages">
								<li><a href="?cat=visiteur&module=articles&action=lire_articles">La Communauté</a></li>
								<li><a href="?cat=visiteur&module=profils&action=lire_profils">Les Bagpackers</a></li>
								<li><a href="?cat=visiteur&module=photos&action=lire_photos">Galerie</a></li>
							</ul>
						</li>
						<li class="other"><a href="?cat=visiteur&module=profils&action=lire_mon_profil">Espace Perso</a>
							<ul class="menu-voyages">
								<li><a href="?cat=visiteur&module=profils&action=lire_mon_profil">Mon Profil</a></li>
								<li><a href="?cat=visiteur&module=voyages&action=lire_groupes_voyage">Mes groupes voyages</a></li>
								<!--<li><a href="?cat=visiteur&module=factures&action=lire_factures">Mes Factures</a></li>-->
							</ul>
						</li>
						<li class="other"><a href="?cat=visiteur&module=voyages&action=lire_voyages">Road Trip</a>
							<ul id="menu-voyages" >
								<li><a href="?cat=visiteur&module=voyages&action=lire_voyages">Tous les Road Trip</a></li>
								<li><a href="?cat=visiteur&module=voyages&action=lire_last_voyages">Dernières minutes</a></li>
								<li><a href="?cat=visiteur&module=hotels&action=lire_hotels">Tous les Hôtels</a></li>
								<li><a href="?cat=visiteur&module=propositions&action=ajout_prop_voyage">Proposer un Road Trip</a></li>					
							</ul>
						</li>
			    	</ul>
			  </div>

			  <div class="clear"></div>

			</nav>

		<?php } ?>
		
	<div id="social-networks">
		<a href="https://www.facebook.com/The-Bagpackers-772495969526876/"><img alt="fb" id="facebook" src="assets/images/facebook.png"/></a>
		<a href="https://twitter.com/TheBagpackers"><img alt="twitter" id="twitter" src="assets/images/twitter.png"/></a>
		<a href="https://www.instagram.com/thebagpackers/"><img alt="insta" id="instagram" src="assets/images/instagram.png"/></a>
		<a href=""><img alt="pinterest" id="pinterest" src="assets/images/pinterest.png"/></a>
	</div>
