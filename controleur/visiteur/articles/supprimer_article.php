<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if($_SESSION["user"] && $_GET["id"])
		{
		include_once('modele/visiteur/articles/supprimer_article.php');
		$delete = delete_article($_GET['id']);
			if($delete)
			{
				header("Location:?cat=visiteur&module=articles&action=lire_articles&notif=ok");
			}
			else
			{
				header("Location:?cat=visiteur&module=articles&action=lire_articles&notif=Nok");
			}		
		}
		else
		{
			echo "Pirate détecté, identification en cours...";exit;
		}

