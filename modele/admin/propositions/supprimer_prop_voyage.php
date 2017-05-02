<?php
	
	function delete_proposition($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_proposition_voyage WHERE id_proposition_voyage = :id_proposition_voyage";
				$q = $connection->prepare($query);
				$q->bindParam(':id_proposition_voyage', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}