<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_mon_profil($user)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users 
										WHERE id_user = :id_user");

		$select->bindValue(':id_user', $user, PDO::PARAM_INT);
		$select->execute();
		$profil = $select->fetch();
		$select->closeCursor();
		return $profil;
	}	
	catch (Exception $e)
	{
		return false;
	}
}