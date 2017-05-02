<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

		if(($_SESSION["user"]["id_admin"]))
		{
			if($_GET['id'])
			{
				include_once('modele/admin/hotels/supprimer_hotel.php');
				$delete = delete_hotel($_GET['id']);
				if($delete)
					{
						header("Location:?cat=admin&module=hotels&action=lire_hotels&notif=ok");
					}
					else
					{
						header("Location:?cat=admin&module=hotels&action=lire_hotels&notif=Nok");
					}
			}
			else
			{
				include_once('vue/admin/problème.php');
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}
