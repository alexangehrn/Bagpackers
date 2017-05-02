<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_groupes($user)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_pays, Bp_voyages, Bp_users_voyages, Bp_users, Bp_images_voyage 
										WHERE id_pays = id_pays_voyage 
										AND id_user = user_id 
										AND id_voyage = voyage_id 
										AND id_user = :id_user 
										AND sejour = id_voyage 
										ORDER BY login");

		$select->bindValue(":id_user", $user, PDO::PARAM_INT);
		$select->execute();
		$groupes = $select->fetchAll();
		$select->closeCursor();
		

		return $groupes;
	}	
	catch (Exception $e)
	{

		return false;
	}
}