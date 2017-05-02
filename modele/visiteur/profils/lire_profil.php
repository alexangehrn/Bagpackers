<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_profil($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users 
										WHERE id_user = :id_user");

		$select->bindValue(':id_user', $id, PDO::PARAM_INT);
		$select->execute();
		$profils = $select->fetch();
		$select->closeCursor();
		return $profils;
	}	
	catch (Exception $e)
	{
		return false;
	}
}