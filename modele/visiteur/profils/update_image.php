<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function update_image($adresse, $user){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("UPDATE Bp_users
										set photo_profil = :photo
										where id_user = :id_user");

		$curseur->bindValue(':photo', $adresse, PDO::PARAM_STR);
		$curseur->bindValue(':id_user',  $user, PDO::PARAM_INT);

		$retour = $curseur->execute();
		
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}