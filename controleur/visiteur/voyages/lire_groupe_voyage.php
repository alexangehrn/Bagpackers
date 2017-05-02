<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{

			if(isset($_GET["id"]))
			{
				require_once('modele/visiteur/voyages/lire_groupe_voyage.php');
				$groupe = lire_groupe($_GET["id"]);

				require_once('modele/visiteur/messages/lire_comment_message.php');
				$commentaires = lire_comment_message();
				require_once('modele/visiteur/voyages/lire_users_voyage.php');
				$voyage_users = lire_users_voyage($_GET["id"]);


				if($groupe AND $voyage_users)
				{	
					if(isset($_GET["last_id"])){

					require_once('modele/visiteur/messages/lire_last_messages.php');
					$messages = lire_last_messages($_GET["id"], $_GET["last_id"]);

					foreach ($messages as $message) {
						echo "
						<!--- Lire Article --> 

						<div id='articless'>";

							if($messages == false){
								echo 'Aucun message à afficher.';
							}
							else{

								foreach ($messages as $message) { 
								
								echo "<div class='article' id='".$message['id_message']."'>
									
									<img alt='Photo Profil' class='profil-art' src='".$message["photo_profil"]."'>
								
									<div class='droite-p'>
										
										<h3>".$message["display_name"]."</h3>
									
										<p> 
											".$message["descr_message"]."
										</p>

									</div>	

									<div class='clear'></div>

									<!--- Formulaire de commentaire --> 

									<form class='comment' method='post' action='?cat=visiteur&module=messages&action=ajout_comment_message'>

										<input name='descr_comment_message' id='com' cols='20' rows='1' maxlength='255' placeholder='Commentez'>
										<input name='id_message' type='hidden' class='article' value='".$message['id_message']."'>
										<input name='id_voyage' type='hidden' value='".$_GET['id']."'>
									
									</form>


									<!--- Lire Commentaires --> 

									<div id='commentss' class='test'>";

									
									if($messages == false){}
									else{
										
										foreach ($commentaires as $key => $commentaire) { 
									
											if($commentaire["message_id"]==$message["id_message"]){	
											
												echo "<div class='comments' id='".$commentaire['id_comment_article']."'>

													<div class='bloc-comment'>

														<img alt='Photo Profil' src='".$commentaire["photo_profil"]."'>
														
														<h4>".$commentaire["login"]."</h4>
														
														<p> ".$commentaire["descr_comment_message"]." </p>

													</div>
												
												</div>";
											 }
										}
									} 
								echo "</div>
								</div>";
								}
							} 

						echo "</div>";
					}}
					else{
						
						require_once('modele/visiteur/messages/lire_messages.php');
						$messages = lire_messages($_GET["id"]);

						include_once('vue/visiteur/voyages/lire_groupe_voyage.php');
					}
				}
				else

				{
					include_once('vue/visiteur/probleme.php');

				}
			}
			else
			{
				include_once('vue/visiteur/404.php');
			}
		}
		else
		{
			header("location:?cat=visiteur&module=users&action=login_user");
		}
