<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function confirm($cle)
	{
		global $connection;

		try
		{	
			$curseur = $connection->prepare("UPDATE Bp_users
					SET verif = :verif
					WHERE cle = :cle");
			$curseur->bindValue(':cle', $cle, PDO::PARAM_STR);
			$curseur->bindValue(':verif', true, PDO::PARAM_BOOL);
			$confirm = $curseur->execute();
			return $confirm;
		}
		catch (Exception $e)
		{
			echo $e;
		}
	}