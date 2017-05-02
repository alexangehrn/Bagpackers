<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_users_voyage()
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_voyages, Bp_users_voyages, Bp_users 
										WHERE id_user = user_id 
										AND id_voyage = voyage_id 
										ORDER BY login");

		$select->execute();
		$voyage_users = $select->fetchAll();
		$select->closeCursor();
		

		return $voyage_users;
	}	
	catch (Exception $e)
	{
		return false;
	}
}