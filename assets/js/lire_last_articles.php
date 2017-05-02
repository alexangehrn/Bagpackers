<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_articles()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_articles, Bp_users WHERE id_user = auteur_article and id_article > ".$_GET["id"]." ORDER BY date_article DESC");
		$select->execute();
		$articles = $select->fetchAll();
		$select->closeCursor();
		return $articles;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}