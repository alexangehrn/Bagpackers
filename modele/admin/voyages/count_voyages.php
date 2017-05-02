<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function count_voyages()
	{
		global $connection;

		try
		{
			$select= $connection->query('SELECT COUNT(*) FROM Bp_voyages');
			$count = $select->fetch();
			$select->closeCursor();
			return (int)$count[0];
			
		}
		catch (Exception $e)
		{
			$select->closeCursor();
			return false;
		}
	}