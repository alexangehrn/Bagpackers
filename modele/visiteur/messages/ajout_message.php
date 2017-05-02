<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_message($message, $user){

	global $connection;
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_messages
										(descr_message, auteur_message, id_voyage_msg)
										values
										(:descr_message, :auteur, :voyage)");
		
		$curseur->bindValue(':descr_message', $message["descr_message"], PDO::PARAM_STR);
		$curseur->bindValue(':auteur',  $user, PDO::PARAM_INT);
		$curseur->bindValue(':voyage', $message["id_voyage"], PDO::PARAM_INT);

		$retour = $curseur->execute(); 
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}