<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

		if(($_SESSION["user"]["id_admin"]))
		{
			include_once('modele/admin/propositions/supprimer_prop_voyage.php');
			$delete = delete_proposition($_GET['id']);
			if($delete)
				{
					header("Location:?cat=admin&module=propositions&action=lire_prop_voyage&notif=ok");
				}
				else
				{
					header("Location:?cat=admin&module=propositions&action=lire_prop_voyage&notif=Nok");
				}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}

