<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/voyages/lire_voyage.php");
				$voyage = lire_voyage($_GET["id"]);
				require_once("modele/admin/hotels/lire_hotels.php");
				$hotels = lire_hotels();
				if($voyage)
				{
					require_once("modele/admin/voyages/lire_voyage_users.php");
					$voyage_users = lire_voyage_users($_GET['id']);
					
					include_once("vue/admin/voyages/lire_voyage.php");
				}
				else
				{
					header('location:?cat=admin&module=voyages&action=lire_voyages')	;
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

