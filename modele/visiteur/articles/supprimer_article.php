<?php
	
	function delete_article($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_articles 
				WHERE id_article = :id_article";
				
				$q = $connection->prepare($query);
				$q->bindParam('id_article', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}