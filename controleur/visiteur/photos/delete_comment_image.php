<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{

			include_once('modele/visiteur/photos/delete_comment_image.php');
			$delete = delete_comment_image($_GET["id"]);

			if($delete)
			{
				echo "<p class='succes'> Bravo votre commentaire a été supprimé </p>";
			}
			else
			{
				echo "<p class='echec'> Désolé votre commentaire n'a pas été supprimé </p>";
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}
