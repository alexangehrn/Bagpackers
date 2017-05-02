<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_pays($pays)
{

	global $connection;
		
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_pays
				(descr_pays, nom_pays)
				values
				(:descr_pays, :nom_pays)");
		$curseur->bindValue(':descr_pays', $pays["descr_pays"], PDO::PARAM_STR);
		$curseur->bindValue(':nom_pays', $pays['nom_pays'], PDO::PARAM_INT);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}