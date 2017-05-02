<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
			if(!isset($_POST["message"]))
			{
				include_once('vue/visiteur/contacts/ajout_contact.php');
			}
			else
			{
				require_once('modele/visiteur/contacts/ajout_contact.php');
				$ajout = ajout_contact($_POST);
				
				if($ajout)
				{
					header('location:?cat=visiteur&module=contacts&action=ajout_contact&notif=OK');
				}
				else
				{
					header('location:?cat=visiteur&module=contacts&action=ajout_contact&notif=NOK');
				}
			}
		