<?php 
	$title = 'Tous nos Roadtrips';
	include ("vue/visiteur/layout/header.inc.php"); 
?>

<!--- Conteneur page --> 

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy">

		<h2 id="voyages"> Trouvez votre Road Trip</h2>
	

		<form id="choix-voyages">

			<select id="mon_action" name="pays">
				<option value="0" selected>Toutes Destination</option>
			   		<?php foreach ($pays as $pay){?>
						<option value='<?php echo $pay["id_pays"]; ?>'> <?php echo $pay["nom_pays"]; ?> </option>
					<?php } ?>		
			</select>

	  		<input id="research" type="submit" value="Rechercher">

		</form>

	</div>

<!--- H1 de la page lire_voyages --> 

	<h1 id="inscription"> Découvrez nos Pays </h1>

<!--- Bloc Voyage --> 

	<div id="bloc-voyages">

		<?php foreach ($voyages as $voyage) { ?>

		<div class="bloc-voyages">
			
			<div class="bloc-gauche">
				
				<img alt="Photo Profil" class="big-img" src="<?php echo $voyage["adresse_iv"];?>">
				<h2 class="nom-pays"> <?php echo $voyage["nom_pays"];?> </h2>

			</div>

			<h3 class="nom-voyage"> <?php echo $voyage["titre_voyage"];?> </h3>

			<p class="description-voy">

				<b> <?php echo $voyage["sloggan"];?></b><br/>

				<?php echo $voyage["descr_voyage"];?><br/>
				
				<?php if($voyage["nbre_participant"]==0){
						echo "<b>Aucun Bagpackers inscrit</b><br/>";
					}
					else{
						echo "<b> Les Bagpackers inscrits</b><br/>";
					
						foreach ($voyage_users as $voyage_user) { 

							if($voyage_user["voyage_id"]==$voyage["id_voyage"]) {?>

								<img alt="Photo Profil" src="<?php echo $voyage_user["photo_profil"]; ?> ">	
				
							<?php }
						} 	
					}
				?>

			</p>

			<div class="clear"></div>
			
			<p class="places">

				<img alt="Pointer" src="assets/images/point.png"> 
				<?php $places = $voyage["nombre_limite_participant"] - $voyage["nbre_participant"]; ?>
				Il ne reste plus que  <?php echo $places; ?> Places ! 

			</p>

			<p class="plus-bloc">

				<a class="plus" href="?cat=visiteur&module=voyages&action=lire_voyage&id=<?php echo $voyage["id_voyage"];?>"> En savoir plus </a>
			
			</p>

			<div class="clear"></div>

		</div>

		<?php } ?>

	</div>

</div>

<!--- Script AJAX permettant de trier par Pays --> 

<script type="text/javascript" src="assets/js/ajax_lire_voyages.js"></script>   

<?php 
	include ("vue/visiteur/layout/footer.inc.php"); 
?>