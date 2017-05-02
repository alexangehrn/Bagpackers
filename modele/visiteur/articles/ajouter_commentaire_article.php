<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_commentaire_article($commentaire)
{

	global $connection;

	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_comments_article
										(descr_comment_article, auteur_comment_article, article)
										values
										(:descr_comment_article, :auteur_comment_article, :article)");
		
		$curseur->bindValue(':descr_comment_article', $commentaire["commentaire"], PDO::PARAM_STR);
		$curseur->bindValue(':auteur_comment_article', $_SESSION["user"]["id_user"], PDO::PARAM_INT);
		$curseur->bindValue(':article', $commentaire["id_article"], PDO::PARAM_INT);
		$retour = $curseur->execute();
		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}