<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_etapes($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_etapes, Bp_hotels 
										WHERE id_sejour = :id_voyage 
										AND id_hotel = hotel_etape");
		$select->bindValue(":id_voyage", $id, PDO::PARAM_INT);
		$select->execute();
		$etapes = $select->fetchAll();
		$select->closeCursor();
		return $etapes;
	}	
	catch (Exception $e)
	{
		
		return false;
	}
}