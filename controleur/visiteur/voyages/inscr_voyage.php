<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	if(isset($_SESSION["user"])){
		if ($_POST["num"])
		{
			require_once('modele/visiteur/voyages/inscr_voyage.php');
			$donnees = inscr_voyage($_POST);

			require_once('modele/visiteur/voyages/inscr_groupe.php');
			$groupe = inscr_groupe($_SESSION["user"]["id_user"], $_POST);

			if($groupe&&$donnees)
			{
				include_once('modele/visiteur/voyages/lire_groupe_voyage.php');
				$groupe_voyage = lire_groupe_voyage($_GET["id"]);

				if($groupe_voyage)
				{
					header('location:?cat=visiteur&module=voyages&action=lire_groupe_voyage&id='.$id_groupe_voyage.'&notif=OK');
				}
				else
				{
					header('location:?cat=visiteur&module=voyages&action=lire_voyage&id='.$_GET["id"].'&notif=NOK');
				}
			}
			else{
				include_once('vue/visiteur/problème.php');

			}
		}
		else
		{
			echo "Hack reconnu.";exit;
		}
}
else
{
	header('location:?cat=visiteur&module=users&action=login_user');
}
