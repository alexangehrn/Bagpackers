<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/pays/lire_pays.php");
				$pays = lire_pays();
				if($pays)
				{
				include_once("vue/admin/pays/lire_pays.php");
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
