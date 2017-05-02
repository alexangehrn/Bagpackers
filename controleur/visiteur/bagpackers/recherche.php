<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if(!isset($_POST['requete']) && $_POST['requete'] != NULL)
		{
		include_once('vue/visiteur/bagpackers/index.php');
		}
		else
		{
			require_once('modele/visiteur/voyages/lire_voyages.php');
			$voyages = lire_voyages();

			require_once('modele/visiteur/users/lire_user.php');
			$users = check_user();		

			require_once('modele/visiteur/bagpackers/recherche_voyage.php');
			$recherche_voyages = recherche_voyage();

			require_once('modele/visiteur/bagpackers/recherche_user.php');
			$recherche_users = recherche_user();

			if($recherche_voyages)
			{
				include_once('vue/visiteur/bagpackers/resultats_voyage.php');
			}
			elseif($recherche_users)
			{
				include_once('vue/visiteur/bagpackers/resultats_user.php');
			}	
			else
			{
				header("location:?cat=visiteur&module=bagpackers&action=index&result=none");
			}
		}