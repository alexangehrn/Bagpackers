<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				require_once("modele/admin/pays/lire_pays.php");
				$pays = lire_pays();

				if(isset($_POST['descr_hotel']))
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
						require_once("modele/admin/hotels/ajouter_hotel.php");
						$ajout = ajouter_hotel($_POST, $adresse);
					}

					if($ajout)
					{
						header("location:?cat=admin&module=hotels&action=lire_hotels&notif=ok");
					}
					else
					{
						header("location:?cat=admin&module=hotels&action=ajouter_hotel&notif=nok");
					}
				}
				
				else
				{
					include_once("vue/admin/hotels/ajouter_hotel.php");
				}
			}
			else
			{	
				header('location:?cat=admin&module=bagpackers&action=index');	
			}
		}
		else
		{
			header('location:?cat=admin&module=users&action=login_user');
		}
