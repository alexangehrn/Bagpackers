<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_commentaires($last_id1)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users, Bp_comments_article 
										WHERE id_user = auteur_comment_article 
										and id_comment_article > ".$last_id1." 
										ORDER BY date_comment_article DESC");
		$select->execute();
		$commentaires = $select->fetchAll();
		$select->closeCursor();
		return $commentaires;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}