<?php
	
	function delete_comment_image($id)
	{
		
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_comments_images 
				WHERE id_comment_image = :id_comment";
				
				$q = $connection->prepare($query);
				$q->bindParam(':id_comment', $id, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}