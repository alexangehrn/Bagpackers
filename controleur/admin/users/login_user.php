<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if(!isset($_POST["login"]))
{
	if(!isset($_SESSION["user"]))
	{
		include_once('vue/admin/users/login_user.php');
	}
	else
	{
		header("Location:?cat=admin&module=bagpackers&action=admin");
	}
}
else
{
	$form= $_POST;
	$form["password"] = md5($form["password"]);
	require_once('modele/admin/users/login_admin.php');
	$user = add_connexion($form);
	if ($user)
	{
		$_SESSION["user"] = $user;
		/*if(isset($_POST["remember"]))
        {
            if (!setcookie ("remember", serialize($_POST), time()+5*60))
            {
                 die("Le cookie ne peut être enregistré !");
            }
        }*/
		header("Location:?cat=admin&module=bagpackers&action=admin&notif=ok");
	}
	else
	{
		header("Location:?cat=admin&module=users&action=login_user&notif=nok");
	}
}