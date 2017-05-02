<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_last_articles($last_id)
{
	global $connection;
	try
	{ 
		$select = $connection->query("SELECT * FROM Bp_articles, Bp_users 
			WHERE id_user = auteur_article 
			and id_article > ".$last_id."
			ORDER BY date_article DESC ");
		
		//$select->bindValue(":idd", $last_id , PDO::PARAM_INT);

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