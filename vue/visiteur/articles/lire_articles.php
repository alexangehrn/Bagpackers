<?php $title= 'Notre Communauté';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content" >

<!--- Loader --> 

	<div id="preloader">
		<img src="assets/images/30.gif" alt="ajax loader" title="ajax loader">
	</div>

<!--- Bandeau d'entete de page --> 

	<div id="bandeau2">

		<div>
			<h2 id="concept"> Votre communauté</h2>
		</div>

	</div>

<!--- Publication articles --> 

	<div id="zoneTexte"></div>

	<div id="publish"> 
		<img alt="Photo Profil" src="<?php echo $_SESSION["user"]["photo_profil"];?>">

		<form id="publication" action"" method="POST">

			<textarea name="article" cols="20" rows="3" id="pub" maxlength="1000" placeholder="Exprimez-vous"></textarea>
			<input class="publier" type="submit" value="Poster"/>

		</form>

		<div class="clear"> </div>

	</div>

<!--- Lire Article --> 

	<div id="articless">
		<?php foreach ($articles as $article) { ?>

		<div class="article" id="<?php echo $article['id_article']; ?>">
			
			<img alt="Photo Profil" class="profil-art" src="<?php echo $article["photo_profil"]; ?>">
		
			<div class="droite-p">
				
				<h3> <?php echo $article["display_name"]; ?> </h3>
			
				<p> 
					<?php echo $article["descr_article"]; ?>
				</p>

				<?php if($_SESSION["user"]["id_user"]==$article["auteur_article"]) { ?>

				<div class="form-group">
					<a href="?cat=visiteur&module=articles&action=supprimer_article&id=<?php echo $article['id_article']; ?>">Supprimer</a>
				</div>

				<?php } ?>

			</div>	

			<div class="clear"></div>

<!--- Formulaire de commentaire --> 

			<form class="comment" action="?cat=visiteur&module=articles&action=ajouter_commentaire_article" method="POST">

				<input name="commentaire" id="com" cols="20" rows="1" maxlength="255" placeholder="Commentez" >
				<input name="id_article" class="article" type="hidden" value="<?php echo $article["id_article"] ?>" />
			</form>


<!--- Lire Commentaires --> 
			<div id="commentss" class='test'>
				<?php  foreach ($commentaires as $commentaire) { ?>
					
					<?php if($article['id_article']==$commentaire['article']) { ?>

					<div class="comments" id="<?php echo $commentaire['id_comment_article']; ?>">

						<div class="bloc-comment">

							<img alt="Photo Profil"  src="<?php echo $commentaire["photo_profil"];?>">
							
							<h4> <?php echo $commentaire["display_name"]; ?></h4>
							
							<p> <?php echo $commentaire["descr_comment_article"]; ?> </p>


							<?php if($_SESSION["user"]["id_user"]==$commentaire["auteur_comment_article"]) { ?>
							
								<div class="form-group">
									<a href="?cat=visiteur&module=articles&action=supprimer_commentaire_article&id=<?php echo $commentaire['id_comment_article']; ?>">Supprimer</a>
								</div>

							<?php } ?>

						</div>

					</div>
					
					<?php }
				} ?>

			</div>
		</div>

		<?php } ?>

	</div>

</div>

<!--- Script AJAX permettant l'affichage des derniers articles en direct --> 

<script type='text/javascript' src='assets/js/ajax_lire_articles.js'></script>

<!--- Script AJAX permettant le scroll infini --> 

<script type='text/javascript' src='assets/js/ajax_scroll_articles.js'></script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>