<?php $title= 'Vos résultats';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy5">
		
		<h2 id="voyages"> Retrouvez vos Amis</h2>

	</div>

<!--- H1 de la page lire_profils --> 

	<h1 id="inscription"> Résultats de recherche </h1>

<!--- Bloc Voyage --> 
	<div id="photos_all">

		<?php foreach ($recherche_users as $recherche_user) { ?>

			<div class="bloc-voyages">

				<div class="bloc-gauche">
					<img alt="Photo Profil" class="big-img" src="<?php echo $recherche_user["photo_profil"]; ?>">
				</div>

				<h3 class="nom-voyage">  <?php echo $recherche_user["display_name"]; ?></h3>
			
				<p class="description-voy">
					<?php if($recherche_user["certifie"]==1) { ?>	<b>Bagpackeur Certifié</b><br/> 	<?php } ?>

					<?php if($recherche_user["descr_user"]==NULL){echo "Pas de description disponible"; } else{echo $recherche_user["descr_user"]; } ?>
				</p>


				<div class="clear"></div>

				<p class="plus-bloc">
					<a class="plus" href="?cat=visiteur&module=profils&action=lire_profil&id=<?php echo $recherche_user['id_user'] ?>"> En savoir plus </a>
				</p>

				<div class="clear"></div>

			</div>

		<?php } ?>
	</div>		
</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>