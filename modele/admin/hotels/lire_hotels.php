<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_hotels()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_hotels, Bp_pays WHERE id_pays = id_pays_hotel");
		$hotels = $select->fetchAll();
		$select->closeCursor();
		return $hotels;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}