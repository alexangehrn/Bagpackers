<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_prop_hotel($contact_hotel)
{

	global $connection;
		
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_contact_hotels
										(descr_contact_hotel, nom_hotel, email_hotel, adresse_contact_hotel)
										values
										(:descr_contact_hotel, :nom_hotel, :email_hotel, :adresse_contact_hotel)");
		
		$curseur->bindValue(':descr_contact_hotel', $contact_hotel["descr"], PDO::PARAM_STR);
		$curseur->bindValue(':nom_hotel', $contact_hotel["etab"], PDO::PARAM_STR);
		$curseur->bindValue(':email_hotel', $contact_hotel['email'], PDO::PARAM_STR);
		$curseur->bindValue(':adresse_contact_hotel', $contact_hotel['adresse'], PDO::PARAM_STR);
		
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}