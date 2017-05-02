<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_contact_hotel()
{
	global $connection;
	try
	{
		
		$select = $connection->query("SELECT * FROM Bp_contact_hotels");
		$contact = $select->fetchAll();
		$select->closeCursor();
		return $contact;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}