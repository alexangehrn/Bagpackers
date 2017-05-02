<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function select_user()
	{
		global $connection;
		try
		{
			$query = $connection -> prepare('SELECT* FROM Bp_users 
											WHERE email = :email');

			$query->bindParam(':email', $email, PDO::PARAM_STR);

			$query->execute();
			$user=$query->fetch();

			$query->closeCursor();
			return $user;


		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}