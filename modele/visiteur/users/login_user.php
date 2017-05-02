<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function login_user($form)
	{
		global $connection;
		$login = $form["login"];
		$pwd = $form["password"];

		try
		{
			$query = $connection -> prepare('SELECT* FROM Bp_users
											WHERE login=:login
											AND mdp=:mdp');
		
			$query->bindParam(':login', $login, PDO::PARAM_STR);
			$query->bindParam(':mdp', $pwd, PDO::PARAM_STR);
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