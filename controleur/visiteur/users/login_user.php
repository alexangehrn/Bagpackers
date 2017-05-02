<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if(!isset($_POST["login"]))
{
	if(!isset($_SESSION["user"]))
	{
		include_once('vue/visiteur/users/login_user.php');	
	}
	else
	{
		header("Location:?action=index");
	}
}
else
{
	$form= $_POST;
	$form["password"] = md5($form["password"]);

	require_once('modele/visiteur/users/login_user.php');
	$user = login_user($form);
	
	if ($user && $user["verif"]==1)
	{
		$_SESSION["user"] = $user;
		/*if(isset($_POST["remember"]))
        {
            if (!setcookie ("remember", serialize($_POST), time()+5*60))
            {
                 die("Le cookie ne peut être enregistré !");
            }
        }*/
		header("Location:?action=index&notif=ok");
	}
	else
	{
		header("Location:?cat=visiteur&module=users&action=login_user&notif=nok");
	}
}

