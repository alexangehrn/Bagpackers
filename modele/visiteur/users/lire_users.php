<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function check_user()
	{
		global $connection;
		try
		{
			$query = $connection -> prepare('SELECT* FROM Bp_users');
			$query->execute();
			$lire_users=$query->fetchAll();

			$query->closeCursor();
			return $lire_users;


		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}