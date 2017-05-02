<?php

function lire_pays()
	{
		global $connection; 
		
		try{
			$query = $connection->prepare('SELECT * from Bp_pays');
		
			$query->execute(); 
			$pays = $query->fetchAll();

			$query->closeCursor();
			return $pays;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}