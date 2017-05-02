<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_prop_voyage($proposition, $user)
{

	global $connection;
		
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_proposition_voyage
										(descr_proposition, pays, auteur_proposition)
										values
										(:descr_proposition, :pays, :auteur_proposition)");

		$curseur->bindValue(':descr_proposition', $proposition["descr"], PDO::PARAM_STR);
		$curseur->bindValue(':pays', $proposition['Pays'], PDO::PARAM_STR);
		$curseur->bindValue(':auteur_proposition', $user, PDO::PARAM_INT);

		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}