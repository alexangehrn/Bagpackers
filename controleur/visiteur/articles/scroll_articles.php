<?php
sleep(10);
	$page = $_SESSION['page'];
	$new_offset = $page * NB_POSTS_SCROLL;
	$_SESSION['page'] = $page + 1 ;

	// Appel du modèle pour obtenir le nombre total d'articles
	require_once('modele/visiteur/articles/nb_articles.php');
	$count_articles = nb_articles();
require_once('modele/visiteur/articles/lire_commentaires.php');
			$commentaires = lire_commentaires();
	// Appel du modèle pour obtenir les 5 derniers articles
	include_once('modele/visiteur/articles/lire_articles.php');
	$articles = lire_articles($new_offset,NB_POSTS_SCROLL); 



	if($articles){
				foreach ($articles as $article) {
					echo "<div class='article' id=".$article['id_article'].">
		<img alt='Photo Profil' class='profil-art' src='".$article["photo_profil"]."''>
	
		<div class='droite-p'>
			
			<h3>".$article["display_name"]."</h3>
		
			<p> 
				".$article["descr_article"]."
			</p>

			";

			if($_SESSION["user"]["id_user"]==$article["auteur_article"]) { 

			echo "<div class='form-group'>
				<a href='?cat=visiteur&module=articles&action=supprimer_article&id=".$article['id_article']."'>Supprimer</a>
			</div>";

			 } 

	echo "</div>	
		<div class='clear'></div>
<!--- Formulaire de commentaire --> 

		
			<form class='comment' action='test' method='POST'>

				<input name='commentaire' id='com' maxlength='255' placeholder='Commentez' ></input>
				<input name='id_article' class='article' type='hidden' value='".$article["id_article"]."' />
			</form>

<!--- Lire Commentaires --> 
	<div id='commentss' class='test'>";
	foreach ($commentaires as $commentaire) { 
		if($article['id_article']==$commentaire['article']) { 
		
		echo "<div class='comments' id='".$commentaire['id_comment_article']."'>

			<div class='bloc-comment'>

				<img alt='Photo Profil'  src='".$commentaire["photo_profil"]."'>
				
				<h4>".$commentaire["display_name"]."</h4>
				
				<p> ".$commentaire["descr_comment_article"]."</p>";


				if($_SESSION["user"]["id_user"]==$commentaire["auteur_comment_article"]) { 
				
				echo "<div class='form-group'>
					<a href='?cat=visiteur&module=articles&action=supprimer_commentaire_article&id=".$commentaire['id_comment_article']."'>Supprimer</a>
				</div>";

				 } 

			echo "</div>

		</div> ";
		} } 

	echo "</div></div>";
		} 
	}
	
	else{
		//include_once('vue/probleme.php');
		echo "<h2>Fin de liste</h2>";
	}