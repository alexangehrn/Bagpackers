<?php $title = 'Modifier votre mot de passe';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content1">

<!--- H1 de la page password1 --> 

	<h1 id="inscription"> Mot de Passe oublié </h1>

	<?php 
	if(isset($_GET["notif"])){ 
		if($_GET["notif"] == ok){?>
			<p class="succes">Un email vous à été envoyé pour modifier votre mot de passe</p>
		<?php } else{?>
			<p class="echec">Désolé un problème est survenu</p>
	<?php }} ?>
<!--- Formulaire d'envoi de mail pour modification de mot de passe --> 
	

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=users&action=password1">

		<label for="email">Email</label>
		<input  id="email" name="email" type="email" maxlength="35" required/>
			
		<div class="clear"></div>

		<input id="submit" type="submit" value="Envoyer" />
		
		<div class="clear"></div>
		
	</form>

</div>

<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>