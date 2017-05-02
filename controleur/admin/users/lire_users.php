<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/users/lire_users.php");
				$utilisateurs = lire_utilisateurs();
				if($utilisateurs)
				{
				include_once("vue/admin/users/lire_users.php");
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
