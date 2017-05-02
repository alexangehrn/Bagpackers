<?php $title= 'Mon groupe Voyage';
 include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voyage">

		<div>
			<h2 id="concept"> Votre Groupe Voyageur</h2>
		</div>

	</div>

<!--- Navigation Secondaire --> 

	<ul id="menu-voyage">
		<li><a id="discussion_button" href="#">Discussion</a></li>
		<li><a id="membres_button" href="#">Membres du Groupe</a></li>
		<li><a id="infos_button" href="#">Infos Voyage</a></li>
	</ul>

	<div class="clear"></div>
	

<div id="discussion">
<!--- Publication articles --> 

	<div id="zoneTexte"></div>

	<div id="publish"> 
		<img alt="Photo Profil" src="<?php echo $_SESSION["user"]["photo_profil"];?>">

		<form id="publication" action"" method="POST">

			<textarea name="descr_message" cols="20" rows="3" id="pub" maxlength="1000" placeholder="Exprimez-vous"></textarea>
			<input name="id_voyage" id="id_voy" type="hidden" value="<?php echo $_GET["id"] ?>" />
			<input class="publier" type="submit" value="Poster"/>

		</form>

		<div class="clear"> </div>

	</div>

<!--- Lire Article --> 

	<div id="articless">
		<?php foreach ($messages as $message) { ?>

		<div class="article" id="<?php echo $message['id_message']; ?>">
			
			<img alt="Photo Profil" class="profil-art" src="<?php echo $message["photo_profil"]; ?>">
		
			<div class="droite-p">
				
				<h3> <?php echo $message["display_name"]; ?> </h3>
			
				<p> 
					<?php echo $message["descr_message"]; ?>
				</p>



			</div>	

			<div class="clear"></div>

<!--- Formulaire de commentaire --> 

			<form class="comment" action="?cat=visiteur&module=articles&action=ajouter_commentaire_message" method="POST">

				<input name="descr_comment_message" id="com" cols="20" rows="1" maxlength="255" placeholder="Commentez" ></input>
				<input name="id_message" class="article" type="hidden" value="<?php echo $message["id_message"] ?>" />
			</form>


<!--- Lire Commentaires --> 
			<div id="commentss" class='test'>
				<?php  foreach ($commentaires as $commentaire) { ?>
					
					<?php if($message['id_message']==$commentaire['message_id']) { ?>

					<div class="comments" id="<?php echo $commentaire['id_comment_message']; ?>">

						<div class="bloc-comment">

							<img alt="Photo Profil"  src="<?php echo $commentaire["photo_profil"];?>">
							
							<h4> <?php echo $commentaire["display_name"]; ?></h4>
							
							<p> <?php echo $commentaire["descr_comment_messagel"]; ?> </p>



						</div>

					</div>
					
					<?php }
				} ?>

			</div>
		</div>

		<?php } ?>
	</div>

</div>
<div id="membres">

<!--- Présentation de l'equipe --> 
<h1 id="inscription">Votre Equipe</h1>
	<div id="equipe">
		<?php foreach ($voyage_users as $voyage_user) {?>
			<div class="bloc-equipe1">
				<img alt="<?php echo $voyage_user["display_name"];?>" src="<?php echo $voyage_user["photo_profil"];?>">
				<p><?php echo $voyage_user["display_name"];?></p>
			</div>
		<?php } ?>
			
			<div class="clear"></div>

	</div>

	<div class="clear"></div>

</div>

<div id="infos">

<!--- H1 de la page Equipe --> 



</div>
</div>
<script type='text/javascript' src='assets/js/menu_groupe_voyage.js'></script>

<!--- Script AJAX permettant l'affichage des derniers articles en direct --> 

<script type='text/javascript' src='assets/js/ajax_groupe_voyage.js'></script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>