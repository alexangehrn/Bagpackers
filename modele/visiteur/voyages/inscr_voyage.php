<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function inscr_voyage($inscription){

	global $connection;
	$num = $inscription["num"];
	$crypto = $inscription["crypto"];
	$nom_cb = $inscription["card_name"];
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_users
											(donnee_bancaire, crypto, nom_cb)
										values
										(:donnee_bancaire, :crypto, :nom_cb)");

		$curseur->bindValue(':donnee_bancaire', $num, PDO::PARAM_STR);
		$curseur->bindValue(':crypto',  $crypto, PDO::PARAM_INT);
		$curseur->bindValue(':nom_cb', $nom_cb, PDO::PARAM_STR);

		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}