<?php
	
	function delete_image($id)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_images 
				WHERE id_images = :id_image";

				$q = $connection->prepare($query);
				$q->bindParam(':id_image', $id, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}