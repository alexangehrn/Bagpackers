<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function update_profil($profil, $user){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("UPDATE Bp_users
										set display_name = :name,
											email = :email,
											login = :login,
											descr_user = :descr_user
										where id_user = :id_user");

		$curseur->bindValue(':name', $profil["firstname"], PDO::PARAM_STR);
		$curseur->bindValue(':email', $profil["email"], PDO::PARAM_STR);
		$curseur->bindValue(':login',  $profil["username"], PDO::PARAM_STR);
		$curseur->bindValue(':descr_user',  $profil["descr_user"], PDO::PARAM_STR);
		$curseur->bindValue(':id_user',  $user, PDO::PARAM_INT);

		$retour = $curseur->execute();
		
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}