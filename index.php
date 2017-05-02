<?php
	
	define("_BASE_URL", "");
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	//ini_set('display_errors', 0);
	//error_reporting(0);

	// Config des paramètres
	include_once('config/config.inc.php');

	include_once('core/core.php');

	if(!secu_session_start(SESSION_NAME))
	{
	die("Problème technique");
	}
	
	include_once('modele/visiteur/param.inc.php');
	// Appel du controleur du module demandé
	if (!isset($_GET['cat'])) {
		$cat=DEFAULT_CAT;
	} else{
		$cat = $_GET['cat'];
	}

	if (!isset($_GET['module'])) {
		$module=DEFAULT_MODULE;
	} else{
		$module = $_GET['module'];
	}

	if (!isset($_GET['action'])) {
		$action=DEFAULT_ACTION;
	} else {
		$action = $_GET['action'];
	}
	
	$_SESSION["cat"] = $cat;
	$_SESSION["module"] = $module;
	$_SESSION["action"] = $action;

	$url='controleur/'.$cat.'/'.$module.'/'.$action.'.php';

	if (file_exists($url)) {
		include_once($url);
	} else{
		//Pas de module trouvé, erreur 404
		if($cat == "admin"){
			include_once('vue/admin/404.php');
		}
		else{
			include_once('vue/visiteur/404.php');
		}
		
	}