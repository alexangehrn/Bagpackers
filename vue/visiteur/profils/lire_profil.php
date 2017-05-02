<?php $title = $profils["display_name"];
include ("vue/visiteur/layout/header.inc.php"); ?>

<script type="text/javascript">
		$(document).ready( function() {			

    $('.mes-images').on('click', '.lightbox', function() { 
		
		$("#imagebox").load("?cat=visiteur&module=photos&action=lire_photos&id_photo="+$(this).attr("href"));	
		$("#conteneur").show();
		$("#imagebox").show();
		return false;
		
		});
	});

</script>

<div id="content">

<!--- H1 de la page profil --> 
	
	<h1 id="profil"> <?php echo $profils["display_name"]; ?> , 24 </h1>

<!--- Certification ou non --> 
	<?php if($profils["certifie"]==1) { ?>

		<p id="certifie">
			<img alt="etoile" src="assets/images/etoile.png"> 
			Bagpackeur certifié 
		</p>
	<?php } ?>

<!--- Bloc Profil --> 

	<div id="bloc-profil">

		<img alt="Photo Profil" src="<?php echo $profils["photo_profil"]; ?>"> 
		
		<p id="descr-princ"> 
			<b>PSEUDO :</b> <?php echo $profils["login"]; ?> <br/>
			<b>VILLE : </b><?php if($profils["ville"]==NULL){echo "Pas de description disponible"; } else{echo $profils["ville"]; } ?>  <br/>
			<b>EMAIL : </b> <?php echo $profils["email"]; ?>

		</p>

		<p id="descr-sec">
			<span> DESCRIPTION </span><br/>
			<?php if($profils["descr_user"]==NULL){echo "Pas de description disponible"; } else{echo $profils["descr_user"]; } ?>		</p>

		<p id="pays-aimes">
			<span>Les pays que j'aime </span>
			<b> Italie </b>
			<b> Thailande </b>
			<b> Japon </b>
			<b> Croatie </b>
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