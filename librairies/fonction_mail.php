<?php
	function envoyer_mail($expediteur, $mail_expediteur, $mail_destinataire, $objet, $texte, $html, $fichiers, $copie, $copies_cachees, $mail_reply, $dossier)
	{

		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail_destinataire)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = $passage_ligne;
		}

		// Génrerer une frontière entre texte, html, et pièces jointes

		$frontiere = md5(uniqid(mt_rand()));
		
		// Définition du header

		$headers = 'From: "'.$expediteur.'" <'.$mail_expediteur.'>'.$passage_ligne;
		$headers .= 'Return-Path: <'.$mail_reply.'>'.$passage_ligne;
		$headers .= 'MIME-Version: 1.0'.$passage_ligne;
		if($copie != '') 
		{
			$headers .= "Bcc: ".$copie.$passage_ligne;
		}
		if($copies_cachees != '')
		{
			$headers .= "Cc: ".$copies_cachees.$passage_ligne;
		}
		$headers .= 'Content-Type: Multipart/mixed; boundary="'.$frontiere.'"';

		// Début de construction du message

		$message = '';

		// Partie texte brut

		if ($texte != '')
		{
			$message .= '--'.$frontiere.$passage_ligne;
			$message .= 'Content-Type: text/plain; charset="utf-8"'.$passage_ligne;
			$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$message .= $texte."\n\n";
		}

		// Partie texte html

		if ($html != '')
		{
			$message .= '--'.$frontiere.$passage_ligne;;
			$message .= 'Content-Type: text/html; charset="utf-8"'.$passage_ligne;
			$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$message .= $html."\n\n";
		}

		// Pièces jointes

		if ($fichiers != '')
		{

		    $file_ary = array();
		    $file_count = count($_FILES['ch_file']['name']);
		    $file_keys = array_keys($_FILES['ch_file']);

		    for ($i=0; $i<$file_count; $i++) {
		        foreach ($file_keys as $key) {
		            $file_ary[$i][$key] = $_FILES['ch_file'][$key][$i];
		        }
		    }

	   					foreach ($file_ary as $file) 
	   				{

						$message .= '--'.$frontiere.$passage_ligne;;
						$ext = strtolower( substr( strrchr($file["name"], '.') ,1));
						$adresse = $dossier."/".md5(uniqid(rand())).".".$ext;
						if(move_uploaded_file($file["tmp_name"], $adresse))
						{
							if($ext == 'jpg')
							{
								$message .= 'Content-Type: image/jpeg; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext == 'png')
							{
								$message .= 'Content-Type: image/png; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext == 'gif')
							{
								$message .= 'Content-Type: image/gif; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext == 'pdf')
							{
								$message .= 'Content-Type: application/pdf; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'doc')
							{
								$message .= 'Content-Type: application/msword; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'docx')
							{
								$message .= 'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'zip')
							{
								$message .= 'Content-Type: application/zip; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'xls')
							{
								$message .= 'Content-Type: application/vnd.ms-excel; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'xlsx')
							{
								$message .= 'Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'ppt')
							{
								$message .= 'Content-Type: application/vnd.ms-powerpoint; name=" '.$file[$key].' " '.$passage_ligne;
							}
							elseif($ext== 'pptx')
							{
								$message .= 'Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation; name=" '.$file[$key].' " '.$passage_ligne;
							}
							$message .= 'Content-Transfer-Encoding: base64'.$passage_ligne;
							$message .= 'Content-Disposition:attachement; filename=" '.$file[$key].' " '."\n\n";
							$message .= chunk_split(base64_encode(file_get_contents($adresse)))."\n\n";
						}
						else
						{
							return false;
						}
					}
				}	
				
		
		//=====Envoi de l'e-mail.

		if(mail($mail_destinataire,$objet,$message,$headers))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
//=========