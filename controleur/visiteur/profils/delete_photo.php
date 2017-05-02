<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			include_once('modele/visiteur/photos/delete_image.php');
			$delete = delete_image($_GET['id']);
			
			if($delete)
			{
				header("Location:?cat=visiteur&module=profils&action=lire_mon_profil&delete=ok");
			}
			else
			{
				header("Location:?cat=visiteur&module=profils&action=lire_mon_profil&delete=Nok");
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}