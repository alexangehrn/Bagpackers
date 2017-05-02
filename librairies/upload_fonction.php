<?php
	function upload($dossier,$largeur_rectangle,$hauteur_rectangle,$forme,$position,$dim_carre,$file,$taille_maxi)
	{
		$ext = array('jpg', 'jpeg', 'gif', 'png', 'pdf', 'docx');
		$ext_upload = strtolower( substr( strrchr($file['name'], '.') ,1));
		//Taille du fichier
		$taille = filesize($file['tmp_name']);
		if($taille>$taille_maxi)
		{
				header("location:?module=upload&action=upload&taille=incorrect");
				exit;
		}

		if(!in_array($ext_upload, $ext)) //Si l'extension n'est pas dans le tableau
		{
			header("location:?module=upload&action=upload&format=incorrect");
			exit;
		}
						
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
		$adresse = $dossier."/".md5(uniqid(rand())).".".$ext_upload;

		
			if(move_uploaded_file($file['tmp_name'], $adresse))
			{

				if($forme == 'rectangle'){

					if($ext_upload == 'jpg')
					{
					
						$image = ImageCreateFromJPEG($adresse);
						$width = imagesx($image);
						$height = imagesy($image);
						
						if($width>$height)
						{
							//format horizontal
							$new_width = $largeur_rectangle;
							$new_height = ($new_width * $height) / $width ;
						}
						else
						{
							// format vertical
							$new_height = $hauteur_rectangle;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
						ImageJPEG($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);

					}

				
					elseif ($ext_upload == 'gif') 
					{
						$image = ImageCreateFromGIF($adresse);
						$width = imagesx($image);
						$height = imagesy($image);

						if($width>$height)
						{
							//format horizontal
							$new_width = $largeur_rectangle;
							$new_height = ($new_width * $height) / $width ;
						}

						else
						{
							// format vertical
							$new_height = $hauteur_rectangle;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
						ImageGIF($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);

					}


					elseif ($ext_upload == 'png')
					{

						$image = ImageCreateFromPNG($adresse);
						$width = imagesx($image);
						$height = imagesy($image);

						if($width>$height)
						{
							//format horizontal
							$new_width = $largeur_rectangle;
							$new_height = ($new_width * $height) / $width ;
						}

						else
						{
							// format vertical
							$new_height = $hauteur_rectangle;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
						ImagePNG($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);

					}


				}

				else{

					if($ext_upload == 'jpg')
					{
					
						$image = ImageCreateFromJPEG($adresse);
						$width = imagesx($image);
						$height = imagesy($image);
						
						$new_width = $dim_carre;
						$new_height = $dim_carre;
						
						if($width<$height)
						{
							$new_width2 = $dim_carre;
							$new_height2 =  ($new_width2 * $height) / $width;
							$thumb = imagecreatetruecolor($new_width,$new_height);

							if($position == 'centre2'){
								imagecopyresized($thumb, $image, 0, 0, 0, (($new_height2-$new_width2)/2), $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'haut'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'bas'){
								imagecopyresized($thumb, $image, 0, 0, 0, ($new_height2-$new_width2), $new_width2, $new_height2, $width, $height);
							}

						}
						else
						{
							$new_height2 = $dim_carre;
							$new_width2 =  ($new_height2 * $width) / $height;
							$thumb = imagecreatetruecolor($new_width,$new_height);

							if($position == 'centre'){
								imagecopyresized($thumb, $image, (($new_height2-$new_width2)/2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'gauche'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'droite'){
								imagecopyresized($thumb, $image, ($new_height2-$new_width2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
						}


						ImageJPEG($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);

					}

				
					elseif ($ext_upload == 'gif') 
					{
						$image = ImageCreateFromGIF($adresse);
						$width = imagesx($image);
						$height = imagesy($image);
						
						$new_width = $dim_carre;
						$new_height = $dim_carre;
						
						if($width<$height)
						{
							$new_width2 = $dim_carre;
							$new_height2 =  ($new_width2 * $height) / $width;
							$thumb = imagecreatetruecolor($new_width,$new_height);

							if($position == 'centre2'){
								imagecopyresized($thumb, $image, 0, 0, 0, (($new_height2-$new_width2)/2), $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'haut'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'bas'){
								imagecopyresized($thumb, $image, 0, 0, 0, ($new_height2-$new_width2), $new_width2, $new_height2, $width, $height);
							}
						}

						else
						{
							$new_height2 = $dim_carre;
							$new_width2 =  ($new_height2 * $width) / $height;
							$thumb = imagecreatetruecolor($new_width,$new_height);

							if($position == 'centre'){
								imagecopyresized($thumb, $image, (($new_height2-$new_width2)/2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'gauche'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'droite'){
								imagecopyresized($thumb, $image, ($new_height2-$new_width2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
						}

						ImageGIF($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);

					}


					elseif ($ext_upload == 'png')
					{

						$image = ImageCreateFromPNG($adresse);
						$width = imagesx($image);
						$height = imagesy($image);
						
						$new_width = $dim_carre;
						$new_height = $dim_carre;
						
						if($width<$height)
						{
							$new_width2 = $dim_carre;
							$new_height2 =  ($new_width2 * $height) / $width;
							$thumb = imagecreatetruecolor($new_width,$new_height);

							if($position == 'centre2'){
								imagecopyresized($thumb, $image, 0, 0, 0, (($new_height2-$new_width2)/2), $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'haut'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'bas'){
								imagecopyresized($thumb, $image, 0, 0, 0, ($new_height2-$new_width2), $new_width2, $new_height2, $width, $height);
							}

						}

						else
						{
							$new_height2 = $dim_carre;
							$new_width2 =  ($new_height2 * $width) / $height;
							$thumb = imagecreatetruecolor($new_width,$new_height);
							if($position == 'centre'){
								imagecopyresized($thumb, $image, (($new_height2-$new_width2)/2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'gauche'){
								imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
							else if($position == 'droite'){
								imagecopyresized($thumb, $image, ($new_height2-$new_width2), 0, 0, 0, $new_width2, $new_height2, $width, $height);
							}
						}

						ImagePNG($thumb,$adresse);
						//chmod ("uploaded/".$adresse."jpg", 0644);
						imagedestroy($image);
					}
				}
			}
			else
			{
				return false;			
			}
		}
		else{
			return false;
		}	
	
	return $adresse;
}