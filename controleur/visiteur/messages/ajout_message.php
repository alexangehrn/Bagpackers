<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if($_POST["descr_message"])
			{
				require_once('modele/visiteur/messages/ajout_message.php');
				$ajout = ajout_message($_POST, $_SESSION["user"]["id_user"]);
				
				if($ajout)
				{
					echo "<p class='succes'>Votre publication a été correctement effectuée !</p>";
				}
				else
				{
					echo "<p class='echec'>Votre publication n'a pas été correctement effectuée !</p>";
				}
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}