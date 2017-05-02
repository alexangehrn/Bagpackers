<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if(($_SESSION["user"]["id_admin"]))
		{
			include_once('modele/admin/users/supprimer_user.php');
			$delete = delete_user($_GET['id']);
			if($delete)
				{
					header("Location:?cat=admin&module=users&action=lire_users&notif=ok");
				}
				else
				{
					header("Location:?cat=admin&module=users&action=lire_users&notif=Nok");
				}
		}
		else
		{
			header('location:?cat=admin&module=users&action=login_user');
		}

