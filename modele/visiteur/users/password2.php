<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function update_mdp($update)
	{
		global $connection;
		try
		{
			$curseur = $connection -> prepare('UPDATE Bp_users 
											set mdp = :mdp 
											WHERE cle = :cle');

			$curseur->bindParam(':cle', $update["cle"], PDO::PARAM_STR);		
			$curseur->bindParam(':mdp', md5($update["pass"]), PDO::PARAM_STR);		
			$curseur->execute();

			$curseur->closeCursor();
			return true;


		}
		catch (Exception $e)
		{
			$curseur->closeCursor();
			return false;
		}
	}