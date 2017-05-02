<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_voyage($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_voyages, Bp_pays 
			WHERE id_voyage = :id_voyage 
			AND id_pays = id_pays_voyage 
			ORDER BY date_post_voyage DESC");

		$select->bindValue(":id_voyage", $id, PDO::PARAM_INT);
		$select->execute();
		$voyage = $select->fetch();
		$select->closeCursor();
		
		return $voyage;
	}	
	catch (Exception $e)
	{
		
		return false;
	}
}