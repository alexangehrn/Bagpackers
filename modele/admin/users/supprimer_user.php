<?php
	
	function delete_user($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_users WHERE id_user = :id_user";
				$q = $connection->prepare($query);
				$q->bindParam(':id_user', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}