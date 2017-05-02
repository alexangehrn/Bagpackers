<?php

function lire_photos($user)
	{
		global $connection; 
		
		try{ 
			$query = $connection->prepare('SELECT * from Bp_images, Bp_users 
											WHERE photographe = id_user 
											AND photographe = :id_user');
			
			$query->bindValue(":id_user", $user, PDO::PARAM_INT);
			$query->execute();

			$photos = $query->fetchAll();

			$query->closeCursor();
			return $photos;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}