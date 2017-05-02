<?php $title = 'Modifier son profil';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">


	
<!--- H1 de la page lire_mon_profil --> 

	<h1 id="modif"> Modifier mon Profil</h1>
	
	<?php if(isset($_GET["notif"])){
		echo "<p class='echec'> Désolé votre profil n'a pas été correctement modifié </p>";
	}?>

	<div class="bloc-voyages">
		
		<form id="modif-profil" method="post" action="?cat=visiteur&module=profils&action=update_profil" enctype="multipart/form-data">
			
			<div class="bloc_gauche">	
				<img src="<?php echo $profil['photo_profil'];?>" alt="profil"><br/>
				
				<div id="type">
					<input class="file" name="ch_file[]" type="file"/><br/>	
				</div>
				<br/>

			</div>

			<div class="bloc_droite">
	
			<input type="text" name="firstname" placeholder="<?php echo $profil['display_name'];?>" value="<?php echo $profil['display_name']; ?>">  <br/><label> Nom complet </label>
			<br/>
	
			<input type="text" name="username" placeholder="<?php echo $profil['login'];?>" value="<?php echo $profil['login']; ?>"> <br/><label> Pseudo </label>
			<br/>
		
			<input type="email" name="email" placeholder="<?php echo $profil['email'];?>" value="<?php echo $profil['email']; ?>">  <br/><label> Mail </label>
			<br/>

		 	<input type="text" name="descr_user" placeholder="<?php echo $profil['descr_user'];?>" value="<?php echo $profil['descr_user']; ?>"> <br/><label> Description </label>
			<br/>

			<input id="submit" type="submit" value="Modifier">
			</div>
		</form>

		<div class="clear"></div>
	</div>
</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>