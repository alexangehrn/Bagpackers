<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if(!isset($_POST["pass"]))
{
	include_once('vue/visiteur/users/password2.php');
}
else
{
	require_once('modele/visiteur/users/password2.php');
	$mdp = update_mdp($_POST);
	
	if($mdp)
	{
		header("Location:?cat=visiteur&module=users&action=login_user&notif=ok");
	}
	else
	{
		header("Location:?cat=visiteur&module=users&action=password2&notif=nok");
	}
}