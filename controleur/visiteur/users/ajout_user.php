<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if(!isset($_POST["email"]))
{
	include_once('vue/visiteur/users/ajout_user.php');
}
else
{
		require_once('modele/visiteur/users/verif_mail.php');
		$verification_mail = verif_mail($_POST);

		require_once('modele/visiteur/users/verif_login.php');
		$verification_login = verif_login($_POST);		

		if($verification_mail AND $verification_login)
		{
			require_once("librairies/upload_fonction.php");

			$file_ary = array();
		    $file_count = count($_FILES['ch_file']['name']);
		    $file_keys = array_keys($_FILES['ch_file']);

		    for ($i=0; $i<$file_count; $i++) 
		    {
		        foreach ($file_keys as $key) 
		        {
		            $file_ary[$i][$key] = $_FILES['ch_file'][$key][$i];
		        }
		    }
				$dossier = "assets/uploaded";



		   	foreach ($file_ary as $file)
		   	{
			
				$size = getimagesize($file['tmp_name']);
			    $largeur = $size[0];
			    $hauteur = $size[1];


			    if($largeur < $hauteur)
			    {
			    	$position = "centre2";
			    }
			    else
			    {
			    	$position = "centre";
			    }

				$adresse = upload ($dossier,"","","carre",$position,"400",$file,"1000000");
				
				require_once('modele/visiteur/users/ajout_user.php');
				$retour = ajout_inscription($_POST, $adresse);

				if ($retour)
				{
					include_once('core/mail.php');
					header("Location:?cat=visiteur&module=users&action=login_user&ajout=ok");
				}
				else
				{
					header("Location:?cat=visiteur&module=users&action=ajout_user&ajout=nok");
				}
			}
		}
		else
		{
			if($verification_mail == false && $verification_login == true)
			{
				header("Location:?cat=visiteur&module=users&action=ajout_user&duplicate_mail=nok");
			}
			else if($verification_mail == true && $verification_login == false)
			{
				header("Location:?cat=visiteur&module=users&action=ajout_user&duplicate_login=nok");
			}
			else
			{
				header("Location:?cat=visiteur&module=users&action=ajout_user&duplicate_both=nok");
			}
		}
}
