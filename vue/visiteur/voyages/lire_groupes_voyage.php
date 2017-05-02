<?php 
	$title = 'Mes Groupes Voyages' ;
	include ("vue/visiteur/layout/header.inc.php"); 
?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy2">
		
		<h2 id="voyages"> Mes Groupes Voyage</h2>

	</div>

<!--- H1 de la page lire_groupes_voyage --> 

	<h1 id="inscription">Mes Groupes Voyage</h1>

<!--- Bloc Voyage --> 
	<?php foreach ($groupes as $groupe) { ?>

		<div class="bloc-voyages">
			
			<div class="bloc-gauche">
				
				<img alt="Photo Profil" class="big-img" src="<?php echo $groupe["adresse_iv"];?>">
				<h2 class="nom-pays"> <?php echo $groupe["nom_pays"];?> </h2>

			</div>

			<h3 class="nom-voyage"> <?php echo $groupe["titre_voyage"];?> </h3>

			<p class="description-voy">
				
				<b> Un roadtrip inoubliable </b><br/>
				
				<?php echo $groupe["descr_voyage"];?><br/>
				
				<?php if($groupe["nbre_participant"]==0){
					echo "<b>Aucun Bagpackers inscrit<b><br/>";
				}
				else{
					echo "<b> Les Bagpackers inscrits</b><br/>";
					
					foreach ($voyage_users as $voyage_user) { 

						if($voyage_user["voyage_id"]==$groupe["id_voyage"]) {?>

						<img alt="Photo Profil" src="<?php echo $voyage_user["photo_profil"]; ?> ">	
				
						<?php }
					} 	
				}
				?>

			</p>

			<div class="clear"></div>
			
			<p class="places">

				<img alt="Pointer" src="assets/images/point.png"> 
				<?php $places = $groupe["nombre_limite_participant"] - $groupe["nbre_participant"]; ?>
				Il ne reste plus que  <?php echo $places; ?> Places ! 

			</p>

			<p class="plus-bloc">

				<a class="plus" href="?cat=visiteur&module=voyages&action=lire_groupe_voyage&id=<?php echo $groupe["id_voyage"];?>"> En savoir plus </a>
			
			</p>

			<div class="clear"></div>

		</div>

		<?php } ?>



</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>