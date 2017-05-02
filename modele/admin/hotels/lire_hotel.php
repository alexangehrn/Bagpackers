<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function lire_hotel()
	{
		global $connection;

		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_hotels, Bp_pays, Bp_images_hotel
											WHERE id_pays_hotel = id_pays
											AND id_hotel = hotel
											ORDER BY date_post_hotel DESC ');

			$query->execute();

			$hotel=$query->fetchAll();

			$query->closeCursor();

			return $hotel;
		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}