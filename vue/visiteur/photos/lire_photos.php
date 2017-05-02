<?php $title='Galerie Photo';
include('vue/visiteur/layout/header.inc.php') ?>

<div id="content">

<!--- Bandeau de la page photos --> 

	<div id="bandeau-galerie">
		
		<h2 id="voyages"> Trouvez votre Road Trip</h2>

			<form id="choix-voyages">

				<select id="mon_action" name="pays">
					<option value="0" selected>Toutes destination</option>
				   		<?php foreach ($pays as $pay){?>
							<option value='<?php echo $pay["id_pays"]; ?>'><?php echo $pay["nom_pays"]; ?></option>
						<?php } ?>		
				</select>

		  		<input type="submit" value="Rechercher">

			</form>

	</div> 

<!--- H1 de la page photo --> 

	<h1 id="inscription1"> Votre galerie photo </h1>

<!--- Nom Pays selectionné --> 

	<div id="nom_pays">
		
	</div>

	<div class="clear"></div>

<!--- Images --> 

	<div class="mes-images">	
		<?php foreach ($photos as $photo) { ?>

			<a href="<?php echo $photo['id_images'];?>" class='lightbox'><img src="<?php echo $photo['adresse_image'];?>"></a>
		
		<?php }?>
	</div>

<!--- Lightbox --> 

	<div id="conteneur">
		 <div id='imagebox'>	 	
		</div>
	</div>

</div>

<!--- Script AJAX permettant l'affichage de photo par Pays --> 

<script type='text/javascript' src="assets/js/ajax_lire_photos.js"></script>

<!--- Script AJAX permettant l'affichage de lightbox --> 

<script type='text/javascript' src="assets/js/lightbox.js"></script>

<?php include('vue/visiteur/layout/footer.inc.php') ?>
