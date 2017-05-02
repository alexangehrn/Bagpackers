<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_hotels()
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_hotels, Bp_pays 
										WHERE id_pays = id_pays_hotel 
										ORDER BY date_post_hotel DESC");
		
		$select->execute();
		$hotels = $select->fetchAll();
		$select->closeCursor();
		return $hotels;
	}	
	catch (Exception $e)
	{
		
		return false;
	}
}