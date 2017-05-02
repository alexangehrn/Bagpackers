<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function update_pays($pays){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("UPDATE Bp_pays
				set descr_pays = :descr_pays,
					nom_pays = :nom_pays
				where id_pays = :id_pays");
		$curseur->bindValue(':id_pays', $pays["id_pays"], PDO::PARAM_INT);
		$curseur->bindValue(':descr_pays',  $pays["descr_pays"], PDO::PARAM_STR);
		$curseur->bindValue(':nom_pays',  $pays["nom_pays"], PDO::PARAM_STR);

		$retour = $curseur->execute();
		
		return true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
		exit;
	}
}