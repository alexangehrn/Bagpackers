<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
		if(($_SESSION["user"]["id_admin"]))
		{
			include_once('modele/admin/propositions/supprimer_prop_hotel.php');
			$delete = delete_contact_hotel($_GET['id']);
			if($delete)
				{
					header("Location:?cat=admin&module=propositions&action=lire_prop_hotel&notif=ok");
				}
				else
				{
					header("Location:?cat=admin&module=propositions&action=lire_prop_hotel&notif=Nok");
				}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}

