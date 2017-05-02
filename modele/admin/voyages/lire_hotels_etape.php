<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_hotels()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_hotels");
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