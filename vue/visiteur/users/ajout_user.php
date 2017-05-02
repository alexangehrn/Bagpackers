<?php $title = 'Nouveau membre the Bagpackers';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- H1 de la page ajout_user --> 

	<h1 id="inscription"> Inscription </h1>

<!--- Formulaire d'inscription --> 
	<?php 
	if(isset($_GET["ajout"])){
		echo "<p class='echec'>Désolé, l'ajout n'a pas été correctement effectué </p>";
	}
	else if(isset($_GET["duplicate_both"])){
		echo "<p class='echec'> Désolé, votre email et votre login sont déjà utilisés pour un autre compte </p>";
	}
	else if(isset($_GET["duplicate_mail"])){
		echo "<p class='echec'> Désolé, votre email est déjà utilisé pour un autre compte </p>";
	}
	else if(isset($_GET["duplicate_login"])){
		echo "<p class='echec'> Désolé, votre login est déjà utilisé pour un autre compte </p>";
	}
	?>

	<div id="alerte"></div>

		<form id="form_user" class="form_verif" name="form_user" method="post" action="?cat=visiteur&module=users&action=ajout_user" enctype="multipart/form-data">

			<label for="name">Nom Complet</label>
			<input  id="name" name="name" type="text" maxlength="55" />
			<img alt="check" id="test" src="assets/images/check_no.png">

			<div class="clear"></div>
		
			<label for="naiss">Date de Naissance</label>
			<input  id="naiss" name="naiss" type="text" placeholder="AAAA-MM-JJ" />
			<img alt="check" id="test1" src="assets/images/check_no.png">
			
			<div class="clear"></div>

		
			<label for="login">Login</label>
			<input  id="login" name="login" type="text" maxlength="20" />
			<img alt="check" id="test2" src="assets/images/check_no.png">
			
			<div class="clear"></div>

		
			<label for="email">Email</label>
			<input  id="email" name="email" type="email" maxlength="35" />
			<img alt="check" id="test3" src="assets/images/check_no.png">

			<div class="clear"></div>

		
			<label for="pass">Mot de passe</label>
			<input  id="pass" name="pass" type="password" maxlength="32" />
			<img alt="check" id="test4" src="assets/images/check_no.png">
			
			<div class="clear"></div>

			<label for="pass2" id="confirm">Confirmez votre Mot de passe</label>
			<input  id="pass2" name="pass2" type="password" maxlength="32" />
			<img alt="check" id="test5" src="assets/images/check_no.png">

			<div class="clear"></div>

			<label>Votre photo</label>
			<div class="fileUpload">
				<span> Choisir son fichier </span>
				<input class="file" name="ch_file[]" type="file" required/><br/>	
			</div>

			<div class="form-group">
				<input id="cle" name="cle" type="hidden" value="<?php echo md5(uniqid(rand()));?>"/>
			</div>

			<div class="clear"></div>

			<input type="hidden" name="MAX_FILE_SIZE" value="10000"/>

			<input id="submit" type="submit" value="S'inscrire" />

		</form>		

	<div class="clear"></div>

<!--- Renvoi vers la page de login --> 

	<p id="compte"> 
		Vous avez déjà un compte? 
		<a href="?cat=visiteur&module=users&action=login_user">Connectez-vous</a> 
	</p>
	
</div>

<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>  
 
<?php include ("vue/visiteur/layout/footer.inc.php"); ?>