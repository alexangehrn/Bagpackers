<?php $title = 'Découvrez notre concept';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau">
		<div>
			<h2 id="concept"> Rejoignez la communauté<br/> The Bagpackers</h2>
		</div>
	</div>

<!--- H1 de la page Content --> 

	<h1 id="inscription"> Notre Concept </h1>

<!--- Map contenant les 3 étapes pour l'inscription --> 

	<div id="bandeau-map">

		<div id="first-step">
			<p> 
				<b> Etape 1 </b><br/>
				Trouvez un voyage dans le pays de vos rêve partez en groupe en réduisant vos coûts
			</p>
		</div>

		<div id="second-step">
			<p> 
				<b> Etape 2 </b><br/>
				Vivez un vrai road trip et rencontrez des personnes merveilleuses
			</p>
		</div>

		<div id="third-step">
			<p> 
				<b> Etape 3 </b><br/>
				 Partagez votre expérience avec toute une communauté de voyageurs passionnés
			</p>
		</div>
		
		<img alt="grand-etape" id="grand-etape" src="assets/images/etapes.png">
		<img alt="petit-etape" id="petit-etape"  src="assets/images/small-step.png">

	</div>

	<p class="renvoi"> 
		<a href="?cat=visiteur&module=voyages&action=lire_voyages">Trouvez votre Voyage <b>></b></a>
	</p>


<!--- Liste de tous les avantages --> 
	<div id="bandeau-avantages">
	<h4> Les avantages avec The Bagpackers </h4>

		<div id="bloc-avantages">

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto1.png">
				<p>
					<b>Des itinéraires exceptionnels</b><br/>
					Au travers de nos différents road trip, nous vous proposons des itinéraires qui vous permettrons de découvrir les plus beaux paysages. Chaque parcours a été pensé pour vous offrir le meilleur road trip possible.
				</p>
			</div>

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto5.png">
				<p>
					<b>Une communauté d’aventuriers</b><br/>
					The Bagpackers c’est une communauté d’aventuriers et de baroudeurs français. Partager vos road trip et échanger votre passion pour les voyages avec les membres du site qu’ils soient novices ou vétérans. 
				</p>
			</div>

			<div class="clear"></div>

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto2.png">
				<p>
					<b>Cliquez, c’est réservé !</b><br/>
					The Bagpackers vos facilite la préparation de votre road trip avec l’ensemble de ses partenaires. Réservez vos nuits en quelques clics, il ne reste qu’à faire votre sac et vous êtes prêts.
				</p>
			</div>

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto4.png">
				<p>
					<b>Votre road trip au meilleur prix</b><br/>
					Économisez sur le prix de votre road trip. Grâce à nos partenariats et à la communauté The Bagpackers, nous pouvons vous proposer les plus beaux voyages aux meilleurs prix.
				</p>
			</div>

			<div class="clear"></div>

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto6.png">
				<p>
					<b>Partagez vos souvenirs</b><br/>
					Carnets de voyages, photos, vidéos, partagez avec The Bapackers les meilleurs moments de vos road trip et faites découvrir à la communauté les paysages que vous avez traversé.
				</p>
			</div>

			<div class="avantages">
				<img alt="itineraire" src="assets/images/picto3.png">
				<p>
					<b>Une expérience unique</b><br/>
					The Bagpackers vous offre la possibilité de vive une aventure incroyable et une expérience unique. Découvrez les richesses du globe et rencontrez des voyageurs passionnés au cours de road trop mémorables.
				</p>
			</div>

			<div class="clear"></div>

		</div>
	</div>

	<p class="renvoi"> 
		<a href="?cat=visiteur&module=users&action=ajout_user">Inscrivez-vous <b>></b></a>
	</p>


	<div class="clear"></div>

</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>