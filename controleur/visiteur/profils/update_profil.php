<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{

			if(!isset($_POST['username']))
			{
				require_once('modele/visiteur/profils/lire_mon_profil.php');
				$profil = lire_mon_profil($_SESSION['user']['id_user']);	
				
				include_once('vue/visiteur/profils/modif_profil.php');
			}
			else
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
					}
					
					require_once('modele/visiteur/profils/update_image.php');
					$update_image = update_image($adresse, $_SESSION['user']['id_user']);
				

					require_once('modele/visiteur/profils/update_profil.php');
					$update = update_profil($_POST, $_SESSION['user']['id_user']);
					
					if($update)
					{
						header('location:?cat=visiteur&module=profils&action=lire_mon_profil&notif=OK');
					}
					else
					{
						header('location:?cat=visiteur&module=profils&action=update_profil&notif=NOK');
					}
			}
		}
		else{
			header("location:?cat=visiteur&module=users&action=login_user");
		}