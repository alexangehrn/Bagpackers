<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if(!isset($_POST["email"]))
{
	include_once('vue/visiteur/users/password1.php');
}
else
{
	require_once('modele/visiteur/users/password1.php');
	$user = select_user($_POST['email']);

	if($user)
	{
		include_once('core/mail_mdp.php');
		
		header("Location:?cat=visiteur&module=users&action=password1&notif=ok");
	}
	else
	{
		header("Location:?cat=visiteur&module=users&action=password1&notif=nok");
	}
}