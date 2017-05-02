<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_comment_message($comment, $user){

	global $connection;
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_comments_message
										(descr_comment_messagel, auteur_comment_message, message_id)
										values
										(:descr_comment_message, :auteur, :message)");
		
		$curseur->bindValue(':descr_comment_message', $comment["descr_comment_message"], PDO::PARAM_STR);
		$curseur->bindValue(':auteur',  $user, PDO::PARAM_INT);
		$curseur->bindValue(':message', $comment["id_message"], PDO::PARAM_INT);

		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}