<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_photo($photo, $adresse, $user){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_images
										(photographe, pays_image, adresse_image, descr_image)
										values
										(:user, :pays, :adresse_image, :descr_image)");
		
		$curseur->bindValue(':user', $user, PDO::PARAM_INT);
		$curseur->bindValue(':pays', $photo['pays'], PDO::PARAM_INT);
		$curseur->bindValue(':adresse_image',  $adresse, PDO::PARAM_STR);
		$curseur->bindValue(':descr_image',  $photo['descr_image'], PDO::PARAM_STR);

		$retour = $curseur->execute();
	
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}