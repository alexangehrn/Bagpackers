<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_voyages()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_voyages, Bp_images_voyage WHERE id_voyage = sejour");
		$voyages = $select->fetchAll();
		$select->closeCursor();
		return $voyages;
	}	
	catch (Exception $e)
	{
		echo $e->getMessage();exit;
		$select->closeCursor();
		return false;
	}
}