<?php 
	$title = 'Dernière Minute' ;
	include ("vue/visiteur/layout/header.inc.php"); 
?>


<!--- Contenu de la page --> 

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy6">

		<h2 id="voyages"> Voyages Last Minute</h2>

		<form id="choix-voyages">

			<select id="mon_action" name="pays">
				<option value="0" selected>Toutes Destination</option>
			   		<?php foreach ($pays as $pay){?>
						<option value='<?php echo $pay["id_pays"]; ?>'><?php echo $pay["nom_pays"]; ?></option>
					<?php } ?>		
			</select>
			
	  		<input type="submit" value="Rechercher">
	
		</form>

	</div>

<!--- H1 de la page lire_last_voyage --> 

	<h1 id="inscription"> Partez dès Demain ! </h1>

<!--- Bloc Voyage --> 

	<div id="bloc-voyages">
	
	<?php foreach ($last_voyages as $last_voyage) { ?>

		<div class="bloc-voyages">

			<div class="bloc-gauche">
				
				<img alt="Photo Voyage" class="big-img" src="<?php echo $last_voyage["adresse_iv"];?>">
				<h2 class="nom-pays"><?php echo $last_voyage["nom_pays"];?></h2>

			</div>

			<h3 class="nom-voyage"> <?php echo $last_voyage["titre_voyage"];?></h3>
			
			<p class="description-voy">

				<b> <?php echo $last_voyage["sloggan"];?></b><br/>

				<?php echo $last_voyage["descr_voyage"];?><br/>

				<?php 
				if($last_voyage["nbre_participant"]==0)
					{echo "<b>Aucun Bagpackers inscrit</b><br/>";}
				else
					{echo "<b> Les Bagpackers inscrits</b><br/>";}
				?>

			</p>

			<?php foreach ($voyage_users as $voyage_user) { 
				if($voyage_user["voyage_id"]==$last_voyage["id_voyage"]) {?>
				<img alt="Photo Profil" src="<?php echo $voyage_user["photo_profil"]; ?> ">	
			<?php }} ?>	

			<div class="clear"></div>

			<p class="places">
				<img alt="Pointer" src="assets/images/point.png"> 
				<?php $places = $last_voyage["nombre_limite_participant"] - $last_voyage["nbre_participant"]; ?>
				Il ne reste que <?php echo $places; ?> Places !<br/>		
			</p> 

			<p class="plus-bloc">
				<a class="plus" href="?cat=visiteur&module=voyages&action=lire_voyage&id=<?php echo $last_voyage["id_voyage"];?>"> En savoir plus </a>
			</p>

			<div class="clear"></div>

		</div>

	<?php } ?>

	</div>
</div>

<!--- Script AJAX permettant l'affichage de voyages par Pays --> 

<script type="text/javascript" src="assets/js/ajax_lire_last_voyages.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>