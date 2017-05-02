<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	if(isset($_SESSION["user"]))
	{
		session_unset();
		header("Location:?cat=visiteur&module=bagpackers&action=index&logout=ok");

		if(isset($_COOKIE["remember"]))
	    {
	    	if (!setcookie ("remember", "", time()-60))
	  		{
	    		die("Le cookie ne peut être supprimé !");
	  		}
	    }
	}

	else
	{
		header("Location:?cat=visiteur&module=bagpackers&action=index");
	}