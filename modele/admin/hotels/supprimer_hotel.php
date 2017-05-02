<?php
	
	function delete_hotel($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_hotels WHERE id_hotel = :id_hotel";
				$q = $connection->prepare($query);
				$q->bindParam(':id_hotel', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				echo $e->getMessage();exit;
				return false;
			}
	}