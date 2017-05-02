<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if($_SESSION["user"])
	{
		require_once("modele/visiteur/profils/lire_profils.php");
		$profils = lire_profils();
		
		if($profils)
		{
			include_once('vue/visiteur/profils/lire_profils.php');
		}
	}
	else{
			header("location:?cat=visiteur&module=users&action=login_user");

		}