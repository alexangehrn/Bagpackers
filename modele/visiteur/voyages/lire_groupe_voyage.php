<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_groupe($id)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_voyages 
										WHERE id_voyage = :id_voyage");
		$select->bindValue(":id_voyage",$id, PDO::PARAM_INT);
		$select->execute();
		$groupe = $select->fetch();
		$select->closeCursor();
		

		return $groupe;
	}	
	catch (Exception $e)
	{
		return false;
	}
}