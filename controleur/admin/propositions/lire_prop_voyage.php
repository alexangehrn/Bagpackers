<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/pays/lire_pays.php");
				$pays = lire_pays();
				require_once("modele/admin/users/lire_users.php");
				$utilisateurs = lire_utilisateurs();
				require_once("modele/admin/propositions/lire_prop_voyage.php");
				$propositions = lire_proposition_voyage();
				if($propositions)
				{
				include_once("vue/admin/propositions/lire_prop_voyage.php");
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
