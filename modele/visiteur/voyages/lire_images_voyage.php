<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function lire_images_voyage($id_voyage)
	{
		global $connection;

		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_images_voyage 
										WHERE voyage_image = :id_voyage');
		
			$query->bindParam(':id_voyage', $id_voyage, PDO::PARAM_INT);

			$query->execute();

			$images_voyages=$query->fetchAll();

			$query->closeCursor();

			return $images_voyages;
		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}