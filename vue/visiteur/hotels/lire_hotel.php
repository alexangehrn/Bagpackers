<?php $title = $hotel['nom_hotel']; 
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voyage">

		<div>
			<h2 id="concept"> Hôtel disponible au <?php echo $hotel['nom_pays']; ?></h2>
		</div>

	</div>

<!--- H1 de la page lire_hotels --> 

	<h1 id="inscription"> <?php echo $hotel['nom_hotel']; ?> </h1>

<!--- Bloc Hotel --> 

	<div class="etapes-bloc1"> 

		<div class="white-bloc1">

			<div class="img-hotel">
				<img alt="Photo Voyage" src="<?php echo $hotel["couverture_hotel"];?>">
				<img id="notation" alt="note" src="assets/images/notation.png" >
			</div>

			<h3><?php echo $hotel["nom_hotel"];?></h3>

			<p class="sous">  <?php echo $hotel["nom_pays"];?></p>

			<p> 
				<?php echo $hotel["descr_hotel"];?>
			</p>	

			<div class="clear"></div>

		</div>

	</div>

	<h3 class="titre-bloc"> Plus d'informations </h3>
	<div class="etapes-bloc2"> 
		<div class="white-bloc1">
			<p>
				<b> Adresse :</b> <?php echo $hotel["adresse_hotel"];?><br/>
				<b> Pays : </b> <?php echo $hotel["nom_pays"];?> <br/>
				<b> Catégorie de prix : </b> <?php echo $hotel["prix_nuit"];?> la nuit 
			</p>
		</div>
	</div>

	<h3 class="titre-bloc"> Plus d'images </h3>

<!--- Bloc Galerie --> 

	<div id="bloc-galerie">

	<?php
	foreach ($images as $key => $image) {
		if($image['hotel']==$hotel['id_hotel']){	?>
		
			<div><img alt="photo" src="<?php echo $image['adresse_ih']; ?>"></div>
	
	<?php }} ?>
	
	</div>

	<div class="clear"></div>

</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>