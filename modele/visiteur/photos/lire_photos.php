<?php

function lire_photos()
	{
		global $connection; 
		
		try{ 
			$query = $connection->prepare('SELECT * from Bp_images, Bp_users 
											WHERE photographe = id_user');
		
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