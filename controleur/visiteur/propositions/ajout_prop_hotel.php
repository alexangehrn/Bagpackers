<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(!isset($_POST["descr"]))
			{
				include_once('vue/visiteur/propositions/ajout_prop_hotel.php');
			}
			else
			{
				require_once('modele/visiteur/propositions/ajout_prop_hotel.php');
				$ajout_prop_hotel = ajout_prop_hotel($_POST);
				
				if($ajout_prop_hotel)
				{
					header("location:?cat=visiteur&module=propositions&action=ajout_prop_hotel&notif=ok");
				}
				else
				{
					header("location:?cat=visiteur&module=propositions&action=ajout_prop_hotel&notif=Nok");
				}
			}
		}
		else{
				header("location:?cat=visiteur&module=users&action=login_user");
			}