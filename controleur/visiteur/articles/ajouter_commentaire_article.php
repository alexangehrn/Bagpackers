<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
		if (isset($_SESSION["user"]))
		{
				
			require_once('modele/visiteur/articles/ajouter_commentaire_article.php');
			$ajout = ajouter_commentaire_article($_POST);

			if($ajout)
			{
				if(isset($_GET['ajax'])){
				echo "<div id='commentss'>
					
					<div class='comments'>

						<div class='bloc-comment'>

							<img alt='Photo Profil'  src='".$_SESSION["user"]["photo_profil"]."'>
							
							<h4>".$_SESSION["user"]["display_name"]."</h4>
							
							<p>".$_POST["commentaire"]."</p>

						</div>

					</div>

			</div>";
			}
			else {
				header("location:?cat=visiteur&module=articles&action=lire_articles");
			
			}}
			else
			{
				echo "<p class='echec'>Votre commentaire n'a pas été correctement effectuée !</p>";
			}
		}
		else
		{
			header('location:?cat=visiteur&module=users&action=login_user');
		}