<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_comment_image($id_photo)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_comments_images, Bp_users 
										WHERE id_user = auteur_comment_image ");
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