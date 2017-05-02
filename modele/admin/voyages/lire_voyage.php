<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function lire_voyage($id_voyage)
	{
		global $connection;

		try
		{
			$query=$connection->prepare('SELECT* FROM Bp_voyages, Bp_images_voyage
											WHERE :id_voyage = id_voyage
											AND id_voyage = sejour');
		
			$query->bindParam(':id_voyage', $id_voyage, PDO::PARAM_INT);

			$query->execute();

			$voyage=$query->fetch();

			$query->closeCursor();

			return $voyage;
		}
		catch (Exception $e)
		{
			echo $e->getMessage();exit;
			$query->closeCursor();
			return false;
		}
	}