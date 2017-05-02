<?php 
	$title = 'Partir en '.$voyage["nom_pays"];
	include ("vue/visiteur/layout/header.inc.php"); 
?>

<!--- Contenu de la Page --> 

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voyage" style="background-image:url('<?php echo $voyage["couverture_voyage"]; ?>')">

		<div>
			<h2 id="concept" ><?php echo $voyage["titre_voyage"]; ?></h2>
		</div>

	</div>

<!--- Navigation Secondaire --> 

	<ul id="menu-voyage">
		<li><a id="etape_button" href="#">Description</a></li>
		<li><a id="budget_button" href="#">Budget</a></li>
		<li><a id="inscription_button" href="#">Inscription</a></li>
	</ul>

	<div class="clear"></div>

	<?php
		if(isset($_GET['notif'])){ 
			echo "<p class='echec'>Désolé vous n'avez pas été correctement inscrit au voyage... </p>";
		} 
	?>	
	
<!--- H1 de la page lire_voyage description --> 
	
	<h1 id="voyage-seul"> Etapes du Voyage </h1>

<!--- Page Etape --> 

	<div id="etapes">

<!--- Bloc Etape --> 
		
		<?php foreach ($etapes as $etape) {?>
			
			<div class="etapes-bloc"> 

				<p class="nom-etape"> Etape <?php echo $etape["numero_etape"]?> </p>

				<div class="white-bloc">

					<img alt="Photo Voyage" class="img-voyage" src="<?php echo $etape["photo_etape"]?>">
					
					<h3> <?php echo $etape["titre_etape"]?> </h3>
					<p><b> 
						<?php echo $etape["nom_hotel"]?>
					</b></p>
					<p> 
						<?php echo $etape["descr_etape"]?>
					</p>
					
				</div>

			</div>

			<div class="clear"></div>

		<?php } ?>

	</div>

<!--- Page Inscription voyage --> 
<?php if(isset($_SESSION['user'])){?>
	<div id="inscription-page">



<!--- Formulaire d'inscription --> 

		<div id="alerte"></div>

		<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=voyages&action=inscr_voyage">

			<label for="name">Nom Complet</label>
			<input  id="name" name="name" type="text" maxlength="55" value="<?php echo $user['display_name'];?>" required/>
			<img alt="check" id="test" src="assets/images/check_yes.png">

			<div class="clear"></div>
		
			<label for="naiss">Date de Naissance</label>
			<input  id="naiss" name="naiss" type="text" placeholder="YYYY-MM-DD" value="<?php echo $user['date_naissance'];?>" required/>
			<img alt="check" id="test1" src="assets/images/check_yes.png">
			
			<div class="clear"></div>

			<label for="login">Login</label>
			<input  id="login" name="login" type="text" maxlength="20" value="<?php echo $user['login'];?>" required/>
			<img alt="check" id="test2" src="assets/images/check_yes.png">
			
			<div class="clear"></div>

			<label for="email">Email</label>
			<input  id="email" name="email" type="email" maxlength="35" value="<?php echo $user['email'];?>" required/>
			<img alt="check" id="test3" src="assets/images/check_yes.png">

			<div class="clear"></div>

			<label for="num">Numéro de Carte</label>
			<input  id="num" name="num" type="number" maxlength="16"required/>
			<img alt="check" id="test4" src="assets/images/check_no.png">
			
			<div class="clear"></div>

			<label for="crypto">Cryptogramme</label>
			<input  id="crypto" name="crypto" type="password" maxlength="3" max="10000000000000000" required/>
			<img alt="check" id="test5" src="assets/images/check_no.png">

			<div class="clear"></div>

			<label for="card_name">Nom associé</label>
			<input  id="card_name" name="card_name" type="text" maxlength="55" required/>
			<img alt="check" id="test6" src="assets/images/check_no.png">

			<div class="clear"></div>

			<input  id="id_voyage" name="id_voyage" type="hidden" value="<?php echo $_GET['id']; ?>"/>

			<input id="submit" type="submit" value="S'inscrire" />

		</form>		

		<div class="clear"></div>

	</div>
<?php } else{?>
	<div id="inscription-page">
		<p class="echec">Veuillez vous connecter pour pouvoir vous inscrire.</p>
	</div>
<?php } ?>
<!--- Page Budget --> 

	<div id="budget">



	<!--- Affichage des prix --> 

		<div id="bloc-prix">
			
			<?php $jours = (strtotime($voyage["datefin_voyage"]) - strtotime($voyage["datedebut_voyage"]))/(60*60*24);?>
			
			<h3> Le Budget pour <?php echo $jours; ?> jours : </h3>

			<p id="echelle-prix"> 
				Le Prix varie en fonction du nombre de Bagpackers participant au voyage.<br/>
				Ce prix contient uniquement les hôtels : <br/>

				- 3 Inscrits : <b> 3450 € </b><br/>
				- 4 Inscrits : <b> 3450 € </b><br/>
				- 5 à 6 Inscrits : <b> 3450 € </b><br/>
				- 7 à 8 Inscrits : <b> 3450 € </b><br/>
				- 9 à 10 Inscrits : <b> 3450 € </b>
			</p>

			<div class="clear"></div>

			<p id="prix-mom">  3450 € </p>

			<p id="inscr-mom"> 
				5 personnes inscrites pour le moment <br/>
				Votre Budget sera donc au maximum de
			</p>
			
			<div class="clear"></div>

		</div>
	
	</div>

</div>

<!--- Script JS permettant la navigation Sous menu --> 

<script type="text/javascript" src="assets/js/menu_voyage.js"></script>

<!--- Script JS permettant la vérification du formulaire d'inscription à un voyage --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>