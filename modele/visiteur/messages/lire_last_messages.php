<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_last_messages($id, $last_id)
{
	global $connection;
	try
	{

		$select = $connection->prepare("SELECT * FROM Bp_messages, Bp_users 
										WHERE id_user = auteur_message 
										AND id_voyage_msg = :id_voyage 
										AND id_message > :id_last");

		$select->bindValue(":id_voyage", $id, PDO::PARAM_INT);
		$select->bindValue(":id_last", $last_id, PDO::PARAM_INT);
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