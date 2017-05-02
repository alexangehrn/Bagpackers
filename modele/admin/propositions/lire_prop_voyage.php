<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function lire_proposition_voyage()
{
	global $connection;
	try
	{
		$select = $connection->query("SELECT * FROM Bp_proposition_voyage, Bp_users
												WHERE auteur_proposition  = id_user
												ORDER BY date_proposition");
		$proposition = $select->fetchAll();
		$select->closeCursor();
		return $proposition;
	}	
	catch (Exception $e)
	{
		return false;
	}
}