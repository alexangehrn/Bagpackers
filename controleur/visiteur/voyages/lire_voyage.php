<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

		if ($_GET["id"])
		{

				require_once('modele/visiteur/voyages/lire_voyage.php');
				$voyage = lire_voyage($_GET["id"]);

				require_once('modele/visiteur/voyages/lire_etapes.php');
				$etapes = lire_etapes($_GET["id"]);

				if(isset($_SESSION['user']))
				{
					include_once('modele/visiteur/voyages/lire_user.php');
					$user = lire_user($_SESSION['user']['id_user']);
				}

				if($etapes && $voyage)
				{
					include_once('vue/visiteur/voyages/lire_voyage.php');
				}
				else{
					header('location:?cat=visiteur&module=voyages&action=lire_voyages&notif=NOK');
				}
		}
		else
		{
			header('location:?cat=visiteur&module=voyages&action=lire_voyages&notif=NOK');
		}