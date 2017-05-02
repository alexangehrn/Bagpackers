<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function recherche_voyage()
{

	global $connection;
	$requete = htmlspecialchars($_POST['requete']);
	try
	{	
		$query = $connection->prepare("SELECT * FROM Bp_voyages
										WHERE descr_voyage 
										OR titre_voyage LIKE '%".$requete."%' 
										ORDER BY id_voyage");
	
		$query->execute();

		$recherche_voyages = $query->fetchAll();
		$query->CloseCursor();

		return $recherche_voyages;
	}
	catch (Exception $e)
	{
		return false;
	}
}