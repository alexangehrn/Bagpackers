<?php $title = 'Proposez un voyage';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- H1 de la page ajout_prop_voyage --> 

	<h1 id="inscription"> Proposez une Destination </h1>

	<?php if(isset($_GET["notif"])){
			if($_GET["notif"] == "ok"){
				echo "<p class='succes'> Votre proposition a été correctement envoyée </p>";
			}else{
				echo "<p class='echec'> Désolé votre proposition n'a pas été correctement envoyée </p>";
			}
		}
	?>
<!--- Formulaire de proposition de voyage --> 

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=propositions&action=ajout_prop_voyage">

		<label for="Pays">Pays</label>
		<input  id="Pays" name="Pays" maxlength="30" type="text" required/>
	
		<div class="clear"></div>

		<label for="descr">Description</label>
		<textarea id="descr" name="descr" rows="10" maxlength="500" required></textarea>

		<div class="clear"></div>

		<input id="submit" type="submit" value="Proposer" />

		<div class="clear"></div>

	</form>

</div>

<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>