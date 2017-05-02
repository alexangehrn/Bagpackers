<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_messages($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_messages, Bp_users 
										WHERE id_user = auteur_message 
										AND id_voyage_msg = :id_voyage 
										ORDER BY date_message DESC");

		$select->bindValue(":id_voyage", $id, PDO::PARAM_INT);
		$select->execute();
		$messages = $select->fetchAll();
		$select->closeCursor();
		return $messages;
	}	
	catch (Exception $e)
	{
		return false;
	}
}