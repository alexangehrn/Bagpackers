<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_etape($etape, $adresse)
{

	global $connection;
		
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_etapes
				(descr_etape, id_sejour, hotel_etape, numero_etape, titre_etape, photo_etape)
				values
				(:descr_etape, :id_sejour, :hotel_etape, :numero_etape, :titre_etape, :photo_etape)");
		$curseur->bindValue(':descr_etape', $etape["descr_etape"], PDO::PARAM_STR);
		$curseur->bindValue(':id_sejour', $etape["id_sejour"], PDO::PARAM_INT);
		$curseur->bindValue(':hotel_etape', $etape["hotel"], PDO::PARAM_INT);
		$curseur->bindValue(':numero_etape', $etape["numero_etape"], PDO::PARAM_INT);
		$curseur->bindValue(':titre_etape', $etape["titre_etape"], PDO::PARAM_STR);
		$curseur->bindValue(':photo_etape', $adresse, PDO::PARAM_STR);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}