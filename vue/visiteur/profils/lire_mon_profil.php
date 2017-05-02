<?php $title= $profil["display_name"];
include ("vue/visiteur/layout/header.inc.php"); ?>

<script type="text/javascript">
	
	$(document).ready( function() {			

    $('.mes-images').on('click', '.lightbox', function() { 
			$("#imagebox").load("?cat=visiteur&module=profils&action=lire_mon_profil&id_photo="+$(this).attr("href"));	
			$("#conteneur").show();
			$("#imagebox").show();
			return false;
		});
	});

</script>

<div id="content">

<!--- H1 de la page lire_mon_profil --> 

	<h1 id="profil"> <?php echo $profil["display_name"] ?> , 20 </h1>

	<?php if(isset($_GET["notif"])){
		echo "<p class='succes'> Votre profil a été correctement modifié </p>";
	}?>

<!--- Certification ou non --> 

	<?php if($profil["certifie"]==1) { ?>

		<p id="certifie">
			<img alt="etoile" src="assets/images/etoile.png"> 
			Bagpackeur certifié 
		</p>

	<?php } ?>

<!--- lien vers la modification de profil --> 

	<p id="modif-profil">
		<a href="?cat=visiteur&module=profils&action=update_profil"> Modifier mon Profil</a>
	</p>

<!--- Bloc Profil --> 

	<div id="bloc-profil">

		<img alt="Photo Profil" src="<?php echo $profil["photo_profil"] ?>"> 
		
		<p id="descr-princ"> 
			<b>PSEUDO :</b> <?php echo $profil["login"] ?> <br/>
			<b>VILLE : </b>	<?php if($profil["ville"]==NULL){echo "Pas de description disponible"; } else{echo $profil["ville"]; } ?> <br/>
			<b>EMAIL : </b> <?php echo $profil["email"] ?>
		</p>

		<p id="descr-sec">
			<span> DESCRIPTION </span><br/>
			<?php if($profil["descr_user"]==NULL){echo "Pas de description disponible"; } else{echo $profil["descr_user"]; } ?>		
		</p>
		
		<p id="pays-aimes">
			<span>Ajouter des photos </span>
			
			<form name="ajout_photo" method="post" action="?cat=visiteur&module=profils&action=ajout_photo" enctype="multipart/form-data">
			<div class="form-group">
					<select class="form-control" name="pays" id="pays" required>
					<option value="0">Pays concerné</option>
					<?php foreach($pays as $country){ ?>
					<option value='<?= $country["id_pays"]; ?>'><?php echo $country["nom_pays"]; ?></option>
					<?php } ?>
					</select>
			</div>	

			<label>Choix photo</label>
			
			<div class="fileUpload">
				<span> Choisir sa photo </span>
				<input class="file" name="ch_file[]" type="file" required/><br/>	
				<input id="descr_image" name="descr_image" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
			</div>
			
			<input id="submit" type="submit" value="Ajouter" />

			</form>	
		</p>

	</div>

<!--- Bloc Galerie --> 

	<div class="mes-images" id="profil_pic">

	<?php foreach ($photos as $photo) { ?>

		<a href="<?php echo $photo['id_images'];?>" class='lightbox'><img src="<?php echo $photo['adresse_image'];?>"></a>
	
	<?php }?>

	</div>

 	<div id="conteneur">
		 	<div id="imagebox">
			</div>
		</div>
	<div class="clear"></div>

</div>

<script type='text/javascript' src='assets/js/lightbox.js'>  </script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>