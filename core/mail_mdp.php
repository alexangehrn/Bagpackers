<?php
$mail = $_POST['email']; // Déclaration de l'adresse de destination.
$cle = $user['cle'];
$nom= $user['display_name'];

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour ".$nom.", Vous avez demandé à effectuer un changement de votre mot de passe. Effectuez le changement en allant sur le lien suivant: http://angehrn.etudiant-eemi.com/perso/Bagpackers/?cat=visiteur&module=users&action=password2&cle=".$cle;
$message_html = "<html><head></head><body>Bonjour ".$nom.", Vous avez demandé à effectuer un changement de votre mot de passe. Effectuez le changement en cliquant sur le lien suivant: <a href='http://angehrn.etudiant-eemi.com/perso/Bagpackers/?cat=visiteur&module=users&action=password2&cle=".$cle."'>Ici</a> The Bagpackers.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Changement de mot de passe.";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"Bagpackers\"<Bagpackers@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"NoReply\" <NoReply@mail.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
if(mail($mail,$sujet,$message,$header))
	{
		echo"mail envoyé";
		return true;
	}
else
{
	echo "bah non";
}

//=========