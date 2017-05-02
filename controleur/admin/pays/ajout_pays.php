<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				if(isset($_POST['descr_pays']))
				{
					require_once("modele/admin/pays/ajout_pays.php");
					$ajout = ajouter_pays($_POST);
					if($ajout)
					{
						header("location:?cat=admin&module=pays&action=lire_pays&notif=ok");
					}
					else
					{
						header("location:?cat=admin&module=pays&action=ajout_pays&notif=nok");
					}
				}
				else
				{
					include_once("vue/admin/pays/ajout_pays.php");
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
