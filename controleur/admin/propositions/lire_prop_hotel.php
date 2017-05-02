<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/propositions/lire_prop_hotel.php");
				$contacts = lire_contact_hotel();
				if($contacts)
				{
				include_once("vue/admin/propositions/lire_prop_hotel.php");
				}
				else
				{
					include_once("vue/404.php");
				}
			}
			else
			{
				header('location:?cat=admin&module=users&action=login_user');
			}
		}
		else
		{
			header('location:?cat=admin&module=users&action=login_user');
		}
