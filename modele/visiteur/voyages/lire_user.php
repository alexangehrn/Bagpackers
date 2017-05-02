<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_user($user)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users 
										WHERE id_user = :user");

		$select->bindParam(':user', $user, PDO::PARAM_INT);
		$select->execute();
		$user = $select->fetch();
		$select->closeCursor();

		return $user;
	}	
	catch (Exception $e)
	{
		return false;
	}
}