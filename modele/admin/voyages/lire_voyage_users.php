<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_voyage_users($voyage)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users_voyages, Bp_users
										WHERE voyage_id = :id_voyage
										AND id_user = user_id");
		$select->bindValue(':id_voyage', $voyage, PDO::PARAM_INT);
		$select->execute();
		$voyage_users = $select->fetchAll();
		$select->closeCursor();
		return $voyage_users;
	}	
	catch (Exception $e)
	{
		echo $e->getMessage();exit;
		$select->closeCursor();
		return false;
	}
}