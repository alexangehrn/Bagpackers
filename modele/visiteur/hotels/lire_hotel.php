<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_hotel($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_hotels, Bp_pays 
										WHERE id_hotel = :id_hotel 
										AND id_pays = id_pays_hotel");

		$select->bindValue(':id_hotel', $id, PDO::PARAM_INT);
		$select->execute();
		$hotel = $select->fetch();
		$select->closeCursor();
		return $hotel;
	}	
	catch (Exception $e)
	{
		return false;
	}
}