<?php $title = 'Modifier votre mot de passe';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content1">

<!--- H1 de la page password1 --> 

	<h1 id="inscription"> Nouveau Mot de Passe </h1>

	<?php 
		if(isset($_GET["notif"])){ 
			if($_GET["notif"] == nok){ 
				echo '<p class="echec">Désolé un problème est survenu</p>';
 			} 
 		}
 	?>

<!--- Formulaire de modification de mot de passe --> 
	<div id="alerte"></div>

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=users&action=password2">

		<label for="pass">Mot de passe</label>
		<input  id="pass" name="pass" type="password" maxlength="32" required/>
		<img alt="check" id="test4" src="assets/images/check_no.png">
	
		<div class="clear"></div>

		<label for="pass2" id="confirm">Confirmez votre Mot de passe</label>
		<input  id="pass2" name="pass2" type="password" maxlength="32" required/>
		<img alt="check" id="test5" src="assets/images/check_no.png">

		<div class="clear"></div>
		<input name="cle" type="hidden" value="<?php echo $_GET['cle']; ?>" />
		<input id="submit" type="submit" value="Valider" />

	</form>		

</div>

<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>