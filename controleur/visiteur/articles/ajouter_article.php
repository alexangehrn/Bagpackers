<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			require_once('modele/visiteur/articles/ajouter_article.php');
			$ajout = ajouter_article($_POST);
			
			if($ajout)
			{

				echo "<p class='succes'>Votre publication a été correctement effectuée !</p>";
			}
			else
			{
				echo "<p class='echec'>Votre publication n'a pas été correctement effectuée !</p>";
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}