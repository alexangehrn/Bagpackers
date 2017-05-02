<?php $title = 'Trouvez des amis';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voy5">
		
		<h2 id="voyages"> Trouvez vos Amis</h2>

		<form id="choix-voyages" method="post" action="?cat=visiteur&module=profils&action=recherche_profil">

			<input id="deco" name="requete" type="text" placeholder="Nom ou Prénom">
	 	 	<input type="submit" value="Rechercher">
		
		</form>

	</div>

<!--- H1 de la page lire_profils --> 

	<h1 id="inscription"> Découvrez de nouvelles personnes </h1>

<!--- Bloc Voyage --> 
<div id="photos_all">
	<?php foreach ($profils as $profil) { ?>

		<div class="bloc-voyages">

			<div class="bloc-gauche">
				<img alt="Photo Profil" class="big-img" src="<?php echo $profil["photo_profil"]; ?>">
			</div>

			<h3 class="nom-voyage">  <?php echo $profil["display_name"]; ?></h3>
		
			<p class="description-voy">
				<?php if($profil["certifie"]==1) { ?>	
					<b>Bagpackeur Certifié</b><br/> 	
				<?php } ?>

				<?php if($profil["descr_user"]==NULL){
					echo "Pas de description disponible"; 
				} else{
					echo $profil["descr_user"]; 
				} ?>
			</p>

			<div class="clear"></div>

			<p class="plus-bloc">
				<a class="plus" href="?cat=visiteur&module=profils&action=lire_profil&id=<?php echo $profil['id_user'] ?>"> En savoir plus </a>
			</p>

			<div class="clear"></div>

		</div>

	<?php } ?>
</div>		
</div>
<script src="assets/js/ajax_recherche_users.js"></script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>