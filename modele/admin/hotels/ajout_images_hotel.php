<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_image_hotel($image, $adresse, $id_hotel)
{

	global $connection;
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_images_hotel
				(descr_image_hotel, hotel, adresse_ih)
				values
				(:descr_image_hotel, :hotel, :adresse_ih)");
		$curseur->bindValue(':descr_image_hotel', $image["descr_image_hotel"], PDO::PARAM_STR);
		$curseur->bindValue(':hotel', $id_hotel, PDO::PARAM_INT);
		$curseur->bindValue(':adresse_ih', $adresse, PDO::PARAM_INT);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}