<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if(!isset($_POST['requete']) && $_POST['requete'] != NULL)
		{
		include_once('vue/visiteur/profils/lire_profils.php');
		}
		else
		{

			require_once('modele/visiteur/users/lire_user.php');
			$users = check_user();			
			
			require_once('modele/visiteur/profils/recherche_user.php');
			$recherche_users = recherche_user();

			if($recherche_users)
			{
				foreach($recherche_users as $recherche_user){
					echo '<div class="bloc-voyages">

								<div class="bloc-gauche">
									<img alt="Photo Profil" class="big-img" src="'.$recherche_user["photo_profil"].'">
								</div>

								<h3 class="nom-voyage">'.$recherche_user["display_name"].'</h3>
		
								<p class="description-voy">';
									if($recherche_user["certifie"]==1) { 
									echo	'<b>Bagpackeur Certifié</b><br/>';
									 } 

									if($recherche_user["descr_user"]==NULL){
										echo 'Pas de description disponible' ;
									} 
									else{
										echo $recherche_user["descr_user"]; } 
									echo	'
								</p>

									<div class="clear"></div>

									<p class="plus-bloc">
										<a class="plus" href="?cat=visiteur&module=profils&action=lire_profil&id='.$recherche_user['id_user'].'"> En savoir plus </a>
									</p>

							<div class="clear"></div>

							</div>';
				}
			}	
			else
			{
				echo "<p class='echec'>Désolé, il n'y a pas de résultats..</p>";
			}
		}