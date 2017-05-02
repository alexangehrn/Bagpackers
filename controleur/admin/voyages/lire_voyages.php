<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	if(isset($_GET["page"]))
	{
		$page= $_GET["page"];
	}
	else
	{
		$page= 1;
	}

		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/pays/lire_pays.php");
				$pays = lire_pays();
				require_once('modele/admin/voyages/count_voyages.php');
				$count = count_voyages();
				require_once("modele/admin/voyages/lire_voyages.php");
				$voyages = lire_voyages(($page-1) * nb_post_page, nb_post_page);
				if($voyages)
				{
				include_once("vue/admin/voyages/lire_voyages.php");
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
