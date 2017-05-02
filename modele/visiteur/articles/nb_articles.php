<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function nb_articles()
	{
		global $connection; 
		
		try{
		
			$query = $connection->query('SELECT COUNT(*) from Bp_articles');
			
			$nb_articles = $query->fetch();

			$query->closeCursor();
			return (int) $nb_articles[0];
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}