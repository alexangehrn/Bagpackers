<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				if(!isset($_POST["descr_voyage"]))
				{
					require_once('modele/admin/voyages/lire_voyage.php');
					$voyage = lire_voyage($_GET['id']);
					require_once('modele/admin/pays/lire_pays.php');
					$pays = lire_pays();
				//	var_dump($voyage);exit;
					if ($voyage)
					{
						include_once('vue/admin/voyages/update_voyage.php');
					}
					else
					{
						include_once('vue/404.php');
					}
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
						require_once('modele/admin/voyages/update_voyage.php');
						$retour = update_voyage($_POST, $adresse);
					}
					if($retour)			
					{
						header('location:?cat=admin&module=voyages&action=lire_voyages&Update=ok');
					}
					else
					{
						header('location:?cat=admin&module=voyages&action=lire_voyages&Update=Nok');
					}
					
				}
			}
			else
			{
				header('location:?cat=admin&module=bagpackers&action=admin');	
			}
		}
		else
		{
			header('location:?cat=admin&module=users&action=login_user');
		}
