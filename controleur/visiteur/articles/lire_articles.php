<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
			require_once('modele/visiteur/users/lire_user.php');
			$lire_users = check_user();
			
			
			require_once('modele/visiteur/articles/lire_commentaires.php');
			$commentaires = lire_commentaires();

			require_once('modele/visiteur/articles/nb_articles.php');
			$count_articles = nb_articles(); 
			
			$nb_pages = ceil($count_articles/NB_POSTS_SCROLL);

			$_SESSION['nb_pages'] = $nb_pages;

			if( $lire_users)
			{
				$_SESSION['page'] = 1; 

				if(isset($_GET['id'])) { 

			require_once('modele/visiteur/articles/lire_last_articles.php');
			$articles = lire_last_articles($_GET['id']);

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
			<input name='commentaire' id='com' placeholder='Commentez' ></input>
			<input name='id_article' class='article' type='hidden' value='".$article["id_article"]."' />
		</form>

<!--- Lire Commentaires --> 
	<div id='commentss' class='test'>";
	foreach ($commentaires as $commentaire) { 
		if($article['id_article']==$commentaire['article']) { 
		
		echo "<div class='comments' id='".$commentaire['id_comment_article']."''>

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
					require_once('modele/visiteur/articles/lire_articles.php');
		$articles = lire_articles(0,NB_POSTS_SCROLL);
					include_once('vue/visiteur/articles/lire_articles.php');}
				
			}
			else
			{
				include_once('vue/404.php');
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}