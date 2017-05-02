<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_inscription($inscription, $adresse){

	global $connection;
	$pwd = md5($inscription["pass"]);
	$login = $inscription["login"];
	$email = $inscription["email"];
	$name = $inscription["name"];
	$naissance = $inscription["naiss"];
	$cle = $inscription["cle"];
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_users
				(login, mdp, email, display_name, date_naissance, cle, verif, photo_profil)
				values
				(:login, :mdp, :email, :display_name, :date_naissance, :cle, :verif, :photo_profil)");
		$curseur->bindValue(':login', $login, PDO::PARAM_STR);
		$curseur->bindValue(':mdp', $pwd, PDO::PARAM_STR);
		$curseur->bindValue(':email',  $email, PDO::PARAM_STR);
		$curseur->bindValue(':display_name',  $name, PDO::PARAM_STR);
		$curseur->bindValue(':date_naissance',  $naissance, PDO::PARAM_STR);
		$curseur->bindValue(':cle',  $cle, PDO::PARAM_STR);
		$curseur->bindValue(':verif', false, PDO::PARAM_BOOL);
		$curseur->bindValue(':photo_profil', $adresse, PDO::PARAM_STR);


		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
		return false;
	}
}