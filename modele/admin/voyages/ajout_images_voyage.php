<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_image_voyage($image, $adresse, $id_voyage)
{

	global $connection;
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_images_voyage
				(descr_image_voyage, sejour, numero_image, adresse_iv)
				values
				(:descr_image_voyage, :sejour, :numero_image, :adresse_iv)");
		$curseur->bindValue(':descr_image_voyage', $image["descr_image_voyage"], PDO::PARAM_STR);
		$curseur->bindValue(':sejour', $id_voyage, PDO::PARAM_INT);
		$curseur->bindValue(':numero_image', $image['numero_image'], PDO::PARAM_INT);
		$curseur->bindValue(':adresse_iv', $adresse, PDO::PARAM_STR);

		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();exit;
		return false;
	}
}