<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if($_POST["comment-photo"])
			{
				
				require_once('modele/visiteur/photos/ajout_comment_image.php');
				$ajout = ajout_comment_image($_POST, $_SESSION["user"]["id_user"]);
				
				if($ajout)
				{
					echo "<div class='commentaire-photo'><img class='profil-pic' src='".$_SESSION["user"]["photo_profil"]."'/>
<div class='comment-photo'>

			<p>".$_POST["comment-photo"]."</p>";
				}
				else
				{
					echo "<p class='echec'> Votre commentaire n'a pas été correctemetn publié</p>";				}
			}
		}
				else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}