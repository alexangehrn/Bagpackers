<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function inscr_groupe($user, $voyage){

	global $connection;

		$_SESSION["user"]["id_user"], $_POST["id_voyage"];
	
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_users_voyages
										(voyage_id, user_id)
										values
										(:voyage_id, :user_id)");

		$curseur->bindValue(':voyage_id', $voyage['id_voyage'], PDO::PARAM_INT);
		$curseur->bindValue(':user_id',  $user, PDO::PARAM_INT);

		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}