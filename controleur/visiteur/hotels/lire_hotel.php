<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if($_GET["id"])
	{
		require_once("modele/visiteur/hotels/lire_hotel.php");
		$hotel = lire_hotel($_GET["id"]);

		if($hotel)
		{
			require_once('modele/visiteur/hotels/lire_image_hotel.php');
			$images = lire_image_hotel($_GET['id']);
			
			include_once('vue/visiteur/hotels/lire_hotel.php');
		}
	}
	else
	{
		include_once('vue/visiteur/hotels/lire_hotels.php');
	}