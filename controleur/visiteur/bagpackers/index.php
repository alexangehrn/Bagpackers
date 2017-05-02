<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once('modele/visiteur/bagpackers/lire_voyages.php');
$voyages = lire_voyages();

include_once('modele/visiteur/bagpackers/lire_photos.php');
$photos = lire_photos();

if($voyages)
{
	include_once('vue/visiteur/bagpackers/index.php');
}
