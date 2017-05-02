<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function lire_image_voyage($id_voyage)
	{
		global $connection;
		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_images_voyage 
										WHERE voyage_image = :id_voyage 
										ORDER BY id_images_voyage DESC LIMIT 0,1');
		
			$query->bindParam(':id_voyage', $id_voyage, PDO::PARAM_INT);

			$query->execute();

			$image_voyage=$query->fetch();

			$query->closeCursor();

			return $image_voyage;
		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}