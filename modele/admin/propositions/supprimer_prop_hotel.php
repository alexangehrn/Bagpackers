<?php
	
	function delete_contact_hotel($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_contact_hotels WHERE id_contact_hotel = :id_contact_hotel";
				$q = $connection->prepare($query);
				$q->bindParam(':id_contact_hotel', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				echo $e->getMessage();exit;
				return false;
			}
	}