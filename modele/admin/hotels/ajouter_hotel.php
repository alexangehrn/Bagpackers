<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_hotel($hotel, $adresse)
{

	global $connection;

	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_hotels
				(descr_hotel, id_pays_hotel, prix_nuit, adresse_hotel, couverture_hotel, ville_hotel)
				values
				(:descr_hotel, :id_pays_hotel, :prix_nuit, :adresse_hotel, :couverture_hotel, :ville_hotel)");
		$curseur->bindValue(':descr_hotel', $hotel["descr_hotel"], PDO::PARAM_STR);
		$curseur->bindValue(':id_pays_hotel', $hotel['pays'], PDO::PARAM_INT);
		$curseur->bindValue(':adresse_hotel', $hotel["adresse_hotel"], PDO::PARAM_STR);
		$curseur->bindValue(':prix_nuit', $hotel["prix_nuit"], PDO::PARAM_STR);
		$curseur->bindValue(':couverture_hotel', $adresse, PDO::PARAM_STR);
		$curseur->bindValue(':ville_hotel', $hotel["ville_hotel"], PDO::PARAM_STR);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}