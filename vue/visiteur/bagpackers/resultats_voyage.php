<?php $title= 'Vos résultats';
include ("vue/visiteur/layout/header.inc.php"); ?>

<!--- Conteneur page --> 

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy">

		<h2 id="voyages"> Trouvez votre Road Trip</h2>
	
	</div>

<!--- H1 de la page lire_voyages --> 

	<h1 id="inscription"> Résultats de la recherche </h1>

<!--- Bloc Voyage --> 

	<div id="bloc-voyages">
		<?php foreach($recherche_voyages as $recherche_voyage) {?>
				<div class="bloc-voyages">
					
					<div class="bloc-gauche">
						<?php foreach ($voyages as $key => $voyage) {
							if($recherche_voyage["id_voyage"]==$voyage["id_voyage"] AND $voyage["numero_image"]=='1')
								{?>
									<img alt="Photo Profil" class="big-img" src="<?php echo $voyage["adresse_iv"];?>">
									<h2 class="nom-pays"> <?php echo $voyage["nom_pays"];?> </h2>
						<?php }} ?>
					</div>

					<h3 class="nom-voyage"> <?php echo $recherche_voyage["titre_voyage"];?> </h3>

					<p class="description-voy">

						<b> Un roadtrip au coeur de l'Inde</b><br/>

						<?php echo $recherche_voyage["descr_voyage"];?><br/>
						
						<?php if($recherche_voyage["nbre_participant"]==0){
							echo "<b>Aucun Bagpackers inscrit</b><br/>";
						}
						else{
							echo "<b> Les Bagpackers inscrits</b><br/>";
							
						 }?>

					</p>

					<div class="clear"></div>

					<p class="plus-bloc">

						<a class="plus" href="?cat=visiteur&module=voyages&action=lire_voyage&id=<?php echo $recherche_voyage["id_voyage"];?>"> En savoir plus </a>
					
					</p>

					<div class="clear"></div>

				</div>

		<?php } ?>
	</div>

	<p><a href="?cat=visiteur&module=bagpackers&action=index"> Retour à la page d'accueil </a></p>

</div>
<?php include ("vue/visiteur/layout/footer.inc.php"); ?>