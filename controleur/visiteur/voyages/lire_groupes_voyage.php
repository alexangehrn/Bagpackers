<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			require_once('modele/visiteur/voyages/lire_groupes_voyage.php');
			$groupes = lire_groupes($_SESSION['user']['id_user']);

			include_once('modele/visiteur/voyages/lire_users_voyage.php');
			$voyage_users = lire_users_voyage();	

			if($groupes && $voyage_users)
			{
				include_once('vue/visiteur/voyages/lire_groupes_voyage.php');
			}
			else
			{
				header('location:?cat=visiteur&module=voyages&action=lire_voyages&notif=nok');
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}