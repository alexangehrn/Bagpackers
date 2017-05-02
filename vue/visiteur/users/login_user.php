<?php $title = 'Connectez-vous ';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- H1 de la page login_user --> 

	<h1 id="inscription"> Connexion </h1>

	<?php 
		if(isset($_GET["notif"])){
			if($_GET["notif"]== "ok"){
				echo "<p class='succes'>Votre mot de passe a été correctement modifié</p>";
			}else{ 
				echo "<p class='echec'>Votre mot de passe ou login n'est pas correct ou votre compte n'a pas été activé </p>";
			}
		}
		else if(isset($_GET["confirm"])){
			if($_GET["confirm"]== "ok"){
				echo "<p class='succes'>Votre compte a été correctement activé</p>";
			}else{ 
				echo "<p class='echec'>Votre compte n'a pas été correctement activé, un problème est survenu </p>";
			} 
	 	}else if(isset($_GET["ajout"])){
		echo "<p class='succes'>Votre compte a été correctement créé, un mail d'ctivation vous a été envoyé</p>";
	} ?>

<!--- Formulaire de login --> 

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=users&action=login_user">

		<label for="login">Login</label>
		<input  id="login" name="login" type="text" maxlength="20" required/>
			
		<div class="clear"></div>

		<label for="password">Mot de passe</label>
		<input  id="password" name="password" type="password" maxlength="32" required/>

		<div class="clear"></div>

		<input id="submit" type="submit" value="Se Connecter" />
		
		<div class="clear"></div>
		
		<p id="oubli"> 
			<a href="?cat=visiteur&module=users&action=password1">Mot de Passe oublié ?</a> 
		</p>

	</form>

<!--- Renvoi vers la page inscription --> 

	<p id="compte"> 
		Vous n'avez pas encore de compte? 
		<a href="?cat=visiteur&module=users&action=ajout_user">Inscrivez-vous</a> 
	</p>

</div>

<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>  
 
<?php include ("vue/visiteur/layout/footer.inc.php"); ?>