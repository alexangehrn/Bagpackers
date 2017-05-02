<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{			
				require_once('modele/visiteur/messages/ajout_comment_message.php');
				$ajout = ajout_comment_message($_POST, $_SESSION["user"]["id_user"]);

				if($ajout)
				{
					echo "<div class='comments'>

								<div class='bloc-comment'>

									<img alt='Photo Profil' src='".$_SESSION["user"]["photo_profil"]."'>
									
									<h4>".$_SESSION["user"]["login"]."</h4>
									
									<p>" .$_POST["descr_comment_message"]." </p>

								</div>
							
							</div>";
				}
				else
				{
					echo "<p class='echec'>Votre publication n'a pas été correctement effectuée !</p>";
				}
			
		}
				else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}
