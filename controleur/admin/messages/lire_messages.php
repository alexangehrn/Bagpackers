<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/messages/lire_messages.php");
				$contacts = lire_contacts();
				if($contacts)
				{
				include_once("vue/admin/messages/lire_messages.php");
				}
				else
				{
					include_once("vue/404.php");
				}
			}
			else
			{
				header('location:?cat=visiteur&module=bagpackers&action=index');	
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}
