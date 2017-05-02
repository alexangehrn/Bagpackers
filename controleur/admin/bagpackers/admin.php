<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(($_SESSION["user"]["id_admin"]))
			{
				include_once("vue/admin/bagpackers/admin.php");
			}
			else
			{
				include_once("vue/404.php");
			}
		}
		else
		{
			header('location:?cat=admin&module=users&action=login_user');
		}