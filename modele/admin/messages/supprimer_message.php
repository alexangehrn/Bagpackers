<?php
	
	function delete_contact($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_contacts WHERE id_contact = :id_contact";
				$q = $connection->prepare($query);
				$q->bindParam('id_contact', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}