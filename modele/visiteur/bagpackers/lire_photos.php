<?php

function lire_photos()
	{
		global $connection; 
		
		try{ 
			$query = $connection->prepare('SELECT * from Bp_images, Bp_users 
											WHERE id_user = photographe 
											ORDER BY RAND() LIMIT 8');
		
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