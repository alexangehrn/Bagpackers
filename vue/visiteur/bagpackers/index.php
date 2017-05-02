<?php $title= 'Accueil - The Bagpackers';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!-- Bandeau entête de Page -->

	<div id="present">

		<h2 id="home">The Bagpackers </h2>

		<p><b id="slogan"> Seul c'est bien, Ensemble c'est mieux </b></p>
		
		<?php 
		if(!isset($_SESSION['user'])){
		?>

		<div id="user-button">
			<a href="?cat=visiteur&module=users&action=ajout_user" class="button1">Inscription</a> 
			<a href="?cat=visiteur&module=users&action=login_user" class="button1">Connexion</a>
		</div>

		<?php }

		else{ 
		?>

		<div id="user-button">
			<p id="hidden" class="button1"></p> 
		</div>

		<?php } ?>

		<div id="pictos" >
			<div class="pictos" id="picto1"><img alt="voyage" src="assets/images/voyagez.png"/><p>VOYAGEZ</p></div>
			<div class="pictos" id="picto2"><img alt="groupe" src="assets/images/groupe.png"/><p>EN GROUPE</p></div>
			<div class="pictos" id="picto3"><img alt="prix" src="assets/images/argent.png"/><p>A BAS PRIX</p></div>
			<div class="clear"></div>
		</div>
		
	</div>


<!-- Recherche Road Trip -->
	<?php
	if(isset($_GET['notif'])){
		echo '<p class="succes" id="index"> Vous avez été correctement connecté, Bienvenue';	
	}
	else if(isset($_GET['logout'])){
		echo '<p class="succes" id="index"> Vous avez été correctement déconnecté, A bientôt';	
	}
	?>

	<form id="search-voyage" method="post" action="?cat=visiteur&module=bagpackers&action=recherche">

		<input id="text-search" type="text" name="requete" placeholder="Trouvez votre Road Trip" >
		<input type="submit" id="search-now" value=" ">

	</form>

	<?php
	if(isset($_GET['result'])){
		echo '<p class="echec"> Désolé nous n\'avons pas trouvé de résultat à votre recherche</p>';	
	}?>

<!-- H1 de l'Index -->

	<h1 id="accueil" > PARTEZ MAINTENANT !</h1>

<!-- Bloc destinations -->


	<div id="destinations">
		<?php foreach ($voyages as $voyage) { ?>
		<div class="dest">
			<img alt="Voyage" src="<?php echo $voyage["adresse_iv"]; ?>"/>
			<p>
				<b><?php echo $voyage["nom_pays"]; ?></b><br/>
				<?php $places = $voyage["nombre_limite_participant"] - $voyage["nbre_participant"]; ?>
				Il ne reste que <?php echo $places; ?> Places !<br/>
				<a href="?cat=visiteur&module=voyages&action=lire_voyage&id=<?php echo $voyage["id_voyage"]; ?>">Réservez Maintenant </a>
			</p>

		</div>
		<?php } ?>

	</div>
	

	<div class="clear"></div>

<!-- Bloc Video -->

	<div id="bandeau-video">

		<div id="video">

			<iframe src="https://www.youtube.com/embed/qNIEQwDY6WU" allowfullscreen></iframe>
			
			<div id="para-video"> 

				<h5> DECOUVREZ LE PEROU </h5>

				<p>
					Cap sur l'une des destinations les plus passionnantes d'Amérique du Sud lors d'un circuit au Pérou. Découvrez ses villes coloniales, sa capitale Lima, ses impressionnants sites archéologiques, la grande variété de ses paysages de cordillères des Andes...
				</p>

				<p id="lien"><a href="?cat=visiteur&module=voyages&action=lire_voyage&id=2">Réservez maintenant <b>></b> </a></p>

			</div>

			<div class="clear"></div>

		</div>
	</div>

<!-- Bloc Photos -->

	<h4> VOS SOUVENIRS !</h4>

		<div id="bandeau-photo">

		<?php foreach ($photos as $key => $photo) { ?>

			<div class="pola"><img alt="" src="<?php echo $photo['adresse_image'] ;?>"/></div>

		<?php } ?>

			<div class="clear"></div>

		</div>

		<div class="clear"></div>

		<p class="plus-photo">
			<a href="?cat=visiteur&module=photos&action=lire_photos"> Voir la Galerie <b> > </b> </a>
		</p>

<!-- Bloc Map -->

	<h4> OU PARTIR ?</h4>

		<div id="pays">

			<p class="pays" id="name-amerique"><a href="#">PEROU</a></p>
			<p class="pays" id="name-france"><a href="#">FRANCE</a></p>
			<p class="pays" id="name-inde"><a href="#">INDE</a></p>
			<p class="pays" id="name-australie"><a href="#">AUSTRALIE</a></p><br/>

			<img alt="" id="origin-map" src="assets/images/carte.jpg" usemap="#map1"/>
			
			<map name="map1">
				 <area id="map-amerique" shape="rect" coords="200,280,330,480">
				 <area id="map-france" shape="rect" coords="400,180,450,220">
				 <area id="map-inde" shape="rect" coords="600,220,650,300">
				 <area id="map-australie" shape="rect" coords="700,310,810,440">
			</map>

			<div id="descriptions">

				<div id="desc-amerique">
					<h3>VOYAGE AU PEROU </h3><br/>
					Fouler les terres du Pérou et partez sur les traces des premières civilisations et de l'Empire Inca en compagnie de Road tripers. Ses montagnes et plages font du Pérou une déstination des plus incontournables.
				</div>

				<div id="desc-france">
					<h3>VOYAGE EN FRANCE </h3><br/>
					Découvrez les plus belles régions de France avec The Bagpackers. Explorez le patrimoine français, ses paysages et monuments qui font de l'hexagone l'un des plus beaux pays du monde.
				</div>

				<div id="desc-inde">
					<h3>VOYAGE EN INDE </h3><br/>
					L'Inde est sans aucun doûte l'une des déstinations les plus dépaysantes au monde. Foyer de civilisation parmi les plus anciens du globe, l'Inde propose une richesse infinie et des paysages extraordinaires à découvrir sans plus attendre.
				</div>

				<div id="desc-australie">
					<h3>VOYAGE EN AUSTRALIE </h3><br/>
					Les routes de l'Australie sont réservées aux aventuriers les plus courageux mais offrent une expérience inoubliable.De Brisbane à Adélaïde en passant par Ayers Rock, l'outback australien n'attends que vous!
				</div>

			</div>
			
		</div>

</div>

<script type="text/javascript" src="assets/js/map.js"></script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>