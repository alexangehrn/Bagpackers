<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_pays($id_pays)
{
	global $connection;
	try
	{
		$select = $connection->prepare("SELECT * FROM Bp_pays WHERE id_pays = :pays");
		$select->bindValue(':pays', $id_pays, PDO::PARAM_INT);
		$select->execute();
		$pays = $select->fetch();
		$select->closeCursor();

		return $pays;
	}	
	catch (Exception $e)
	{
		echo $e->getMessage();exit;
		$select->closeCursor();
		return false;
	}
}