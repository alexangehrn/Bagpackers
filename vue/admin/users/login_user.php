<?php 	if(!defined("_BASE_URL")) die("Pirate reconnu !"); ?>
<?php include ('vue/admin/layout/header.admin.php');?>
	<h1>Connexion</h1>
	<div class="well">
	<form method="post" action="?cat=admin&module=users&action=login_user" id="connexion" name="connexion">
		<div class="form-group">
			<input id="login" name="login" class="form-control" type="text" placeholder="Login admin"/>
		</div>
		<div class="form-group">
			<input id="password" name="password" class="form-control" type="password" placeholder="Mot de passe admin"/>
		</div>
		<div class="form-group">
			<input type="submit" value="Se connecter" class="btn btn-primary"/><input id="reset" type="reset" value="Effacer" class="btn btn-primary"/>
		</div>
	</form>
</div>