<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_last_voyages()
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_voyages, Bp_pays, Bp_images_voyage 
										WHERE id_pays = id_pays_voyage 
										AND id_voyage = sejour 
										AND numero_image = '1' 
										ORDER BY date_limite DESC LIMIT 0,3");
		
		$select->execute();
		$last_voyages = $select->fetchAll();
		$select->closeCursor();
		return $last_voyages;
	}	
	catch (Exception $e)
	{
		echo $e->getMessage();exit;
		return false;
	}
}