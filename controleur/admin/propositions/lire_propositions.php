<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	if(isset($_SESSION['user']['id_admin']))
	{
		include_once('vue/admin/propositions/lire_propositions.php');
	}
	else
	{
		header('location:?cat=admin&module=users&action=login_user');
	}