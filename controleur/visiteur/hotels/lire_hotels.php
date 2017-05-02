<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	
	require_once('modele/visiteur/hotels/lire_hotels.php');
	$hotels = lire_hotels();
	
	if($hotels)
	{
		include_once('vue/visiteur/hotels/lire_hotels.php');
	}
	else
	{
		include_once('vue/visiteur/404.php');
	}
