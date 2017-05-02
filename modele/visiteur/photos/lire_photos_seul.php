<?php

function lire_photos_seul($id_photo)
	{
		global $connection; 
		
		try{ 
			$query = $connection->prepare('SELECT * from Bp_images, Bp_users 
											WHERE photographe = id_user 
											and id_images= '.$id_photo);
		
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