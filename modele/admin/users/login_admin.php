<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function add_connexion($form)
	{
		global $connection;
		$login = $form["login"];
		$pwd = $form["password"];

		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_admins
											WHERE login_admin=:login
											AND pass_admin=:mdp');
		
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