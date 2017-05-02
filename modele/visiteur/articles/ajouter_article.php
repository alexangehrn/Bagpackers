<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_article($article)
{

	global $connection;

	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_articles
										(descr_article, auteur_article)
										values
										(:descr_article, :auteur_article)");
		
		$curseur->bindValue(':descr_article', $article["article"], PDO::PARAM_STR);
		$curseur->bindValue(':auteur_article', $_SESSION["user"]["id_user"], PDO::PARAM_INT);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}