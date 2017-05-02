<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_contact($message){

	global $connection;
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_contacts
										(nom_contact, descr_contact, email_contact)
										values
										(:nom_contact, :descr_contact, :email)");
		
		$curseur->bindValue(':nom_contact', $message["nom"], PDO::PARAM_STR);
		$curseur->bindValue(':descr_contact',  $message["message"], PDO::PARAM_INT);
		$curseur->bindValue(':email', $message["email"], PDO::PARAM_INT);

		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}