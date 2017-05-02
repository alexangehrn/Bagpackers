<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function check_user()
	{
		global $connection;
		try
		{
			$query = $connection -> prepare('SELECT* FROM Bp_users WHERE id_user = :id_user');
			$query->bindParam(':id_user', $_SESSION["user"]["id_user"], PDO::PARAM_INT);		
			$query->execute();
			$lire_users=$query->fetch();

			$query->closeCursor();
			return $lire_users;


		}
		catch (Exception $e)
		{
			echo $e->getMessage();exit;
			$query->closeCursor();
			return false;
		}
	}