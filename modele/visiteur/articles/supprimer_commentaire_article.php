<?php
	
	function delete_commentaire_article($delete)
	{
		global $connection;
		try
			{
				$query= "DELETE FROM Bp_comments_article 
				WHERE id_comment_article = :id_comment_article";
				
				$q = $connection->prepare($query);
				$q->bindParam(':id_comment_article', $delete, PDO::PARAM_INT);   
				$q->execute();

				return true;

			}
		catch (exception $e)
			{
				return false;
			}
	}