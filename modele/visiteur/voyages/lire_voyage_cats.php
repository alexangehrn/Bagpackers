<?php

function lire_voyage_cats($id_pays)
	{
		global $connection; 

		try{ 
			$query = $connection->prepare('SELECT * from Bp_voyages, Bp_pays, Bp_images_voyage
									where  id_pays = id_pays_voyage 
									AND id_voyage = sejour
									and id_pays_voyage = :id_pays	
									ORDER BY date_post_voyage DESC');
			
			$query->bindValue(":id_pays", $id_pays, PDO::PARAM_INT);

			$query->execute();


			$voyage_cats = $query->fetchAll();

			$query->closeCursor();
			return $voyage_cats;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}