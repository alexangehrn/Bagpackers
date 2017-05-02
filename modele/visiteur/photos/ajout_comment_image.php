<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajout_comment_image($comment, $user){

	global $connection;
	try
	{	
		$curseur = $connection->prepare("INSERT into Bp_comments_images
										(descr_comment_image, auteur_comment_image, image)
										values
										(:descr_comment_image, :auteur, :image)");
		
		$curseur->bindValue(':descr_comment_image', $comment["comment-photo"], PDO::PARAM_STR);
		$curseur->bindValue(':auteur',  $user, PDO::PARAM_INT);
		$curseur->bindValue(':image', $comment["photo"], PDO::PARAM_INT);

		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}