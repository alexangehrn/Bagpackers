<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if(isset($_GET['id'])) {
	if($_GET['id'] != 0){

		include_once('modele/visiteur/pays/lire_pays.php');
		$pays = lire_pays(); 

		include_once('modele/visiteur/voyages/lire_last_voyages_cats.php');
		$last_voyage_cats = lire_last_voyages_cats($_GET['id']); 

		include_once('modele/visiteur/voyages/lire_users_voyage.php');
		$voyage_users = lire_users_voyage();

		if($last_voyage_cats AND $pays){

			foreach ($last_voyage_cats as $last_voyage_cat){
					
					echo "<div class='bloc-voyages'>
						
						<div class='bloc-gauche'>
							<img alt='Photo Profil' class='big-img' src=". $last_voyage_cat["adresse_iv"].">
							<h2 class='nom-pays'>".$last_voyage_cat["nom_pays"]."</h2>
						</div>

						<h3 class='nom-voyage'>".$last_voyage_cat["titre_voyage"]."</h3>

						<p class='description-voy'>
							<b> Un roadtrip au coeur de l'Inde</b><br/>
							".$last_voyage_cat["descr_voyage"]."<br/>";

							if($last_voyage_cat["nbre_participant"]==0){
								echo "<b>Aucun Bagpackers inscrit</b><br/>";
							}
							else
							{
								echo "<b> Les Bagpackers inscrits</b><br/>";
							}
											
						echo "</p>";

						foreach ($voyage_users as $voyage_user) { 
				
							if($voyage_user["voyage_id"]==$last_voyage_cat["id_voyage"]) {
								echo "<img alt='Photo Profil' src='".$voyage_user["photo_profil"]."'>";	
							}
						}

						echo "<div class='clear'></div>
	
						<p class='places'>
						<img alt='Pointer' src='assets/images/point.png'>";
						$places = $last_voyage_cat["nombre_limite_participant"] - $last_voyage_cat["nbre_participant"]; 
						echo "Il ne reste plus que ".$places."Places ! 
						</p>

						<p class='plus-bloc'>
							<a class='plus' href='?cat=visiteur&module=voyages&action=lire_voyage&id=".$last_voyage_cat["id_voyage"]."'> En savoir plus </a>
						</p>

						<div class='clear'></div>
					</div>";

			} 
 		} 			
		else{
			include_once('vue/probleme.php');
		}
	
	}
	else{

		include_once('modele/visiteur/pays/lire_pays.php');
		$pays = lire_pays(); 

		require_once('modele/visiteur/voyages/lire_last_voyages.php');
		$voyages = lire_last_voyages();

		if($voyages AND $pays)
		{
			include_once('modele/visiteur/voyages/lire_users_voyage.php');
			$voyage_users = lire_users_voyage();

			if($voyage_users >=0)
			{
				foreach ($voyages as $voyage){

					echo "<div class='bloc-voyages'>
						
						<div class='bloc-gauche'>
							<img alt='Photo Profil' class='big-img' src=". $voyage["adresse_iv"].">
							<h2 class='nom-pays'>".$voyage["nom_pays"]."</h2>
						</div>

						<h3 class='nom-voyage'>".$voyage["titre_voyage"]."</h3>

						<p class='description-voy'>
							<b> Un roadtrip au coeur de l'Inde</b><br/>
							".$voyage["descr_voyage"]."<br/>";

							if($voyage["nbre_participant"]==0){
								echo "<b>Aucun Bagpackers inscrit</b><br/>";
							}
							else
							{
								echo "<b> Les Bagpackers inscrits</b><br/>";
							}
											
						echo "</p>";

						foreach ($voyage_users as $voyage_user) { 
				
							if($voyage_user["voyage_id"]==$voyage["id_voyage"]) {
								echo "<img alt='Photo Profil' src='".$voyage_user["photo_profil"]."'>";	
							}
						}

						echo "<div class='clear'></div>
	
						<p class='places'>
						<img alt='Pointer' src='assets/images/point.png'>";
						$places = $voyage["nombre_limite_participant"] - $voyage["nbre_participant"]; 
						echo "Il ne reste plus que ".$places."Places ! 
						</p>

						<p class='plus-bloc'>
							<a class='plus' href='?cat=visiteur&module=voyages&action=lire_voyage&id=".$voyage["id_voyage"]."'> En savoir plus </a>
						</p>

						<div class='clear'></div>
					</div>";

				} 
			}
		}

	}
}
else{
		
	require_once('modele/visiteur/voyages/lire_last_voyages.php');
	$last_voyages = lire_last_voyages();

	include_once('modele/visiteur/pays/lire_pays.php');
	$pays = lire_pays(); 

	if($last_voyages AND $pays)
	{
		include_once('modele/visiteur/voyages/lire_users_voyage.php');
		$voyage_users = lire_users_voyage();
		
		if($voyage_users >=0)
		{
			include_once('vue/visiteur/voyages/lire_last_voyages.php');
		}
	}
}
	