<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if(($_SESSION["user"]["id_admin"]))
		{
		include_once('modele/admin/messages/supprimer_message.php');
		$delete = delete_contact($_GET['id']);
		if($delete)
			{
				header("Location:?cat=admi&module=messages&action=lire_messages&notif=ok");
			}
			else
			{
				header("Location:?cat=admi&module=messages&action=lire_messages&notif=Nok");
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}
