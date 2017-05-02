<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function recherche_user()
{

	global $connection;
	$requete = htmlspecialchars($_POST['requete']);
	try
	{	
		$query = $connection->prepare("SELECT * FROM Bp_users
										WHERE descr_user LIKE '%".$requete."%' 
										OR display_name LIKE '%".$requete."%'
										OR login LIKE '%".$requete."%'
										OR email LIKE '%".$requete."%'
										OR ville LIKE '%".$requete."%'");
	
		$query->execute();

		$recherche_users = $query->fetchAll();
		$query->CloseCursor();

		return $recherche_users;
	}
	catch (Exception $e)
	{
		return false;
	}
}