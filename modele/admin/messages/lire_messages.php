<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_contacts()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_contacts");
		$contacts = $select->fetchAll();
		$select->closeCursor();
		return $contacts;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}