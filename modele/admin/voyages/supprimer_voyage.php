<?php
	
	function delete_voyage($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_voyages WHERE id_voyage = :id_voyage";
				$q = $connection->prepare($query);
				$q->bindParam(':id_voyage', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}