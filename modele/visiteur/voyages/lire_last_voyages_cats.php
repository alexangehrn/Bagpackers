<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_last_voyages_cats($id_pays)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_voyages, Bp_pays, Bp_images_voyage 
										WHERE id_pays = id_pays_voyage 
										AND id_voyage = sejour 
										AND numero_image = '1' 
										and id_pays_voyage = :id_pays	
										ORDER BY date_limite DESC LIMIT 0,3");
		
		$select->bindValue(":id_pays", $id_pays, PDO::PARAM_INT);

		$select->execute();
		$last_voyages = $select->fetchAll();
		$select->closeCursor();
		return $last_voyages;
	}	
	catch (Exception $e)
	{
		return false;
	}
}