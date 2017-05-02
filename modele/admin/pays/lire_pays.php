<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_pays()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_pays");
		$pays = $select->fetchAll();
		$select->closeCursor();
		return $pays;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}