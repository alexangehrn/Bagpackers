<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	if(isset($_GET['cle']))
	{
		require_once('modele/visiteur/users/confirm.php');
		$confirm = confirm($_GET['cle']);

		if($confirm)
		{
			header('location:?cat=visiteur&module=users&action=login_user&confirm=ok');
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user&confirm=nok');
		}
	}
	else
	{
		include_once('vue/visiteur/probleme.php');
	}