<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_profils()
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_users 
										ORDER BY login ");

		$select->execute();
		$profils = $select->fetchAll();
		$select->closeCursor();
		
		return $profils;
	}	
	catch (Exception $e)
	{
		
		return false;
	}
}