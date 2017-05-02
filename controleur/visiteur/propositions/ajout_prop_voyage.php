<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(!isset($_POST["descr"]))
			{
				include_once('vue/visiteur/propositions/ajout_prop_voyage.php');
			}
			else
			{
				require_once('modele/visiteur/propositions/ajout_prop_voyage.php');
				$ajout_prop_voyage = ajout_prop_voyage($_POST, $_SESSION['user']['id_user']);
				
				if($ajout_prop_voyage)
				{
					header("location:?cat=visiteur&module=propositions&action=ajout_prop_voyage&notif=ok");
				}
				else
				{
					header("location:?cat=visiteur&module=propositions&action=ajout_prop_voyage&notif=Nok");
				}
			}
		}
		else{
			header("location:?cat=visiteur&module=users&action=login_user");

		}