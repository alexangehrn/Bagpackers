<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			if(isset($_GET['id_photo']))
			{

				include_once('modele/visiteur/photos/lire_photos_seul.php');
				$photos_seuls = lire_photos_seul($_GET['id_photo']); 

				include_once('modele/visiteur/photos/lire_comment_image.php');
				$comments_images = lire_comment_image($_GET['id_photo']); 

				if($photos_seuls ){
					foreach ($photos_seuls as $photos_seul){
					echo "<img id='image' src='".$photos_seul["adresse_image"]."'/>
					
					<div id='bloc-texte'>
						<img src='assets/images/delete.png' id='fermer'>
						<p>
							<b>".$photos_seul["descr_image"]."</b><br/>
							".$photos_seul["login"]."<br/>
						</p>
					
					<form id='comment' action='test'>
						<input type='text' name='comment-photo' placeholder='Commenter..'>
						<input type='hidden' name='photo' value='".$photos_seul["id_images"]."'>
					</form>

					<div class='commentaire-photo'>";

						foreach ($comments_images as $comment_image){
							if($photos_seul['id_images']==$comment_image['image']) { 

								echo"<img class='profil-pic' src='".$comment_image["photo_profil"]."'/>
								
								<div class='comment-photo'>					
									<p>".$comment_image["descr_comment_image"]."</p>";

									if($_SESSION["user"]["id_user"]==$comment_image["auteur_comment_image"]) { 

										echo "<div class='form-group'>
											<a class='delete' href='".$comment_image["id_comment_image"]."'>Supprimer</a>
										</div>"; 
									} 
								echo "</div>";
							}
						}
					echo"</div></div>";
				}
			}}
			else
			{
				require_once("modele/admin/pays/lire_pays.php");
				$pays = lire_pays();

				require_once('modele/visiteur/profils/lire_mon_profil.php');
				$profil = lire_mon_profil($_SESSION['user']['id_user']);

				include_once('modele/visiteur/profils/lire_mes_photos.php');
				$photos = lire_photos($_SESSION['user']['id_user']);
				
				include_once('vue/visiteur/profils/lire_mon_profil.php');
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}