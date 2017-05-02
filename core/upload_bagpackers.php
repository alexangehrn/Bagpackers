<?php
	function upload($dossier)
	{
		echo $_FILES['ch_file']['name'];	
			$ext = array('jpg', 'jpeg', 'gif', 'png');
			$ext_upload = strtolower( substr( strrchr($_FILES['ch_file']['name'], '.') ,1));
			$sizes = getimagesize($_FILES['ch_file']['tmp_name']);
			$adresse = $dossier."/".md5(uniqid(rand())).".".$ext_upload;
			if(move_uploaded_file($_FILES['ch_file']['tmp_name'], $adresse))
			{

				if($ext_upload == 'jpg')
				{
				
					$image = ImageCreateFromJPEG($adresse);
					$width = imagesx($image);
					$height = imagesy($image);
					if($width>$height)
					{
						//format horizontal
						$new_width = 500;
						$new_height = ($new_width * $height) / $width ;
					}
					else
					{
						// format vertical
						$new_height = 375;
						$new_width = ($new_height * $width) / $height;
					}

				$thumb = imagecreatetruecolor($new_width,$new_height);
				imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				ImageJPEG($thumb,$adresse);
			//chmod ("uploaded/".$adresse."jpg", 0644);
				imagedestroy($image);

				var_dump($thumb);
				}

				
				elseif ($ext_upload == 'gif') 
				{
					$image = ImageCreateFromGIF($adresse);
					$width = imagesx($image);
					$height = imagesy($image);

					if($width>$height)
					{
						//format horizontal
						$new_width = 500;
						$new_height = ($new_width * $height) / $width ;
					}

					else
					{
						// format vertical
						$new_height = 375;
						$new_width = ($new_height * $width) / $height;
					}

				$thumb = imagecreatetruecolor($new_width,$new_height);
				imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				ImageGIF($thumb,$adresse);
			//chmod ("uploaded/".$adresse."jpg", 0644);
				imagedestroy($image);

				var_dump($thumb);

				}


				elseif ($ext_upload == 'png')
				{

					$image = ImageCreateFromPNG($adresse);
					$width = imagesx($image);
					$height = imagesy($image);

					if($width>$height)
					{
						//format horizontal
						$new_width = 500;
						$new_height = ($new_width * $height) / $width ;
					}

					else
					{
						// format vertical
						$new_height = 375;
						$new_width = ($new_height * $width) / $height;
					}

					$thumb = imagecreatetruecolor($new_width,$new_height);
					imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
					ImagePNG($thumb,$adresse);
				//chmod ("uploaded/".$adresse."jpg", 0644);
					imagedestroy($image);

					var_dump($thumb);
				}
			}
			else
			{
				echo "fatal error";exit;
			}
		return $adresse;
	}