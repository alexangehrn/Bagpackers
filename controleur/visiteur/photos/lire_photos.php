<?php
if (isset($_SESSION["user"])){

	if(isset($_GET['id'])) {

		if($_GET['id'] == 0){

			include_once('modele/visiteur/photos/lire_photos.php');
			$photos = lire_photos(); 
			if($photos){

				foreach ($photos as $photo){
				echo "<a href='".$photo['id_images']."' class='lightbox'><img src='".$photo['adresse_image']."'></a>";
				} 	
			}
		}
		include_once('modele/visiteur/pays/lire_pays.php');
		$pays = lire_pays(); 

		include_once('modele/visiteur/photos/lire_photos_cat.php');
		$photos_cats = lire_photos_cats($_GET['id']); 


		if($pays AND $photos_cats){

			foreach ($photos_cats as $photo_cat){

						echo "<a href='".$photo_cat['id_images']."' class='lightbox'><img src='".$photo_cat['adresse_image']."'></a>";
 			} 			
		}
		else{
			include_once('vue/probleme.php');
		}
	}

	else if(isset($_GET['id_photo'])){

		


		include_once('modele/visiteur/photos/lire_photos_seul.php');
		$photos_seuls = lire_photos_seul($_GET['id_photo']); 

		include_once('modele/visiteur/photos/lire_comment_image.php');
		$comments_images = lire_comment_image($_GET['id_photo']); 

		if($photos_seuls ){
			foreach ($photos_seuls as $photos_seul){
			echo "<img id='image' src='".$photos_seul["adresse_image"]."'/>
			<div id='bloc-texte'>
			<img src='assets/images/delete.png' id='fermer'>
			<p><b>".$photos_seul["descr_image"]."</b><br/>
			".$photos_seul["login"]."<br/>";
			if($_SESSION["user"]["id_user"]==$photos_seul["photographe"]) { 

			echo "<div class='form-group'>
					<a href='?cat=visiteur&module=photos&action=delete_image&id=".$photos_seul["id_images"]."'>Supprimer</a>
				</div>"; }
			echo "<div class='essai'> <div id='commentss'>";

			foreach ($comments_images as $comment_image){
			if($photos_seul['id_images']==$comment_image['image']) { 

echo"				<div class='commentaire-photo' id='".$comment_image["id_comment_image"]."'><img class='profil-pic' src='".$comment_image["photo_profil"]."'/>
<div class='comment-photo'>
			

			
			<p>".$comment_image["descr_comment_image"]."</p>";
							if($_SESSION["user"]["id_user"]==$comment_image["auteur_comment_image"]) { 

			echo "<div class='form-group'>
					<a class='delete' href='".$comment_image["id_comment_image"]."'>Supprimer</a>
				</div>"; } echo "</div></div>";}}echo"			</div></div>
				<form id='comment' action='test'><input  type='text' name='comment-photo' id='com' placeholder='Commenter..'></input>
			<input type='hidden' name='photo' value='".$photos_seul["id_images"]."'></input>
			</form>";

	}}}

	else{

		include_once('modele/visiteur/pays/lire_pays.php');
		$pays = lire_pays(); 
		include_once('modele/visiteur/photos/lire_photos.php');
		$photos = lire_photos(); 
		if($pays AND $photos){
		
			include_once('vue/visiteur/photos/lire_photos.php');
			
		}
	}
}
else
		{
			header("location:?cat=visiteur&module=users&action=login_user.php");
		}
 