<?php
$mail = $_POST['email']; // Déclaration de l'adresse de destination.
$cle = $_POST['cle'];
$nom= $_POST['name'];

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
//$message_txt = "Bonjour ".$nom.", Veuillez confirmer votre inscription en allant sur le lien suivant: http://angehrn.etudiant-eemi.com/perso/Bagpackers/?cat=visiteur&module=users&action=confirm&cle=".$cle;
$message_html = '<html>
<head>
<title>modif-mp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (modif-mp.psd) -->
<table id="Tableau_01" width="800" height="844" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="http://zupimages.net/up/16/11/beue.gif" width="800" height="702" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="http://zupimages.net/up/16/11/jtsq.gif" width="800" height="142" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>';
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Confirmation d'inscription !";
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