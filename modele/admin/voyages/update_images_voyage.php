<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function update_image_voyage($adresse, $idimage, $voyage){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("UPDATE Bp_images_voyage
				set adresse_iv = :adresse_iv,
					descr_image = :descr_image
				where id_images = :id_images");
		$curseur->bindValue(':id_images', $idimage, PDO::PARAM_INT);
		$curseur->bindValue(':descr_image',  $voyage["descr_image"], PDO::PARAM_STR);
		$curseur->bindValue(':adresse_iv',  $adresse, PDO::PARAM_STR);

		$retour = $curseur->execute();
		
		return true;
	}
	catch (Exception $e)
	{
		echo $e;
		exit;
	}
}