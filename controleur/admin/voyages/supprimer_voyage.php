<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if(($_SESSION["user"]["id_admin"]))
		{
			include_once('modele/admin/voyages/supprimer_voyage.php');
			$delete = delete_voyage($_GET['id']);
			if($delete)
				{
					header("Location:?cat=admin&module=voyages&action=lire_voyages&notif=ok");
				}
				else
				{
					header("Location:?cat=admin&module=voyages&action=lire_voyages&notif=Nok");
				}		
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}


