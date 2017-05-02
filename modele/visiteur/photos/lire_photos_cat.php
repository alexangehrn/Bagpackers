<?php

function lire_photos_cats($id)
	{
		global $connection; 
		
		try{ 
			$query = $connection->prepare('SELECT * from Bp_images
									where pays_image = :id_image');
			
		
			$query->bindParam(':id_image', $id, PDO::PARAM_INT);   
			$query->execute();


			$photos_cats = $query->fetchAll();

			$query->closeCursor();
			return $photos_cats;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}