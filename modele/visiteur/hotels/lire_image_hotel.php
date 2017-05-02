<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function lire_image_hotel($id_hotel)
	{
		global $connection;

		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_images_hotel 
										WHERE hotel = :id_hotel');
		
			$query->bindParam(':id_hotel', $id_hotel, PDO::PARAM_INT);

			$query->execute();

			$images=$query->fetchAll();

			$query->closeCursor();

			return $images;
		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}