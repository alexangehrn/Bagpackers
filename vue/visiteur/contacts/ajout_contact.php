<?php $title= 'contactez-nous';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- H1 de la page ajout_message --> 

	<h1 id="inscription"> Nous Contacter </h1>

	<?php if(isset($_GET["notif"])){
		if($_GET["notif"] == "ok"){
			echo "<p class='succes'> Votre message a été correctement envoyée </p>";
		}else{
			echo "<p class='echec'> Désolé votre message n'a pas été correctement envoyée </p>";
		}}?>
		
<!--- Formulaire de Contact --> 

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=contacts&action=ajout_contact">

		<label for="nom">Nom</label>
		<input  id="nom" name="nom" type="text" maxlength="25" required/>

		<div class="clear"></div>

		<label for="email">Email</label>
		<input  id="email" name="email" type="email" maxlength="35" required/>
	
		<div class="clear"></div>

		<label for="message">Message</label>
		<textarea id="message" name="message" maxlength="155" required></textarea>

		<div class="clear"></div>

		<input id="submit" type="submit" value="Envoyer" />
		
		<div class="clear"></div>

	</form>

</div>
<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>