<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_utilisateurs()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_users");
		$utilisateurs = $select->fetchAll();
		$select->closeCursor();
		return $utilisateurs;
	}	
	catch (Exception $e)
	{
		$select->closeCursor();
		return false;
	}
}