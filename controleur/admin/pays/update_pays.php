<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				if(!isset($_POST["descr_pays"]))
				{
					require_once('modele/admin/pays/lire_pays_update.php');
					$pays = lire_pays($_GET['id']);
				//	var_dump($voyage);exit;
					if ($pays)
					{
						include_once('vue/admin/pays/update_pays.php');
					}
					else
					{
						include_once('vue/404.php');
					}
				}
				else
				{
					require_once('modele/admin/pays/update_pays.php');
					$retour = update_pays($_POST);
		
						if ($retour)
						{
							header("Location:?cat=admin&module=pays&action=lire_pays&notif=ok");
						}
						else
						{
							header("Location:?cat=admin&module=pays&action=lire_pays&notif=nok");
						}
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
