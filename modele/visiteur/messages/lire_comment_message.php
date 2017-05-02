<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_comment_message()
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_comments_message, Bp_users 
										WHERE id_user = auteur_comment_message 
										ORDER BY date_post_comment_msg DESC ");

		$select->execute();
		$commentaires = $select->fetchAll();
		$select->closeCursor();
		return $commentaires;
	}	
	catch (Exception $e)
	{
		return false;
	}
}