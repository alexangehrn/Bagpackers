<?php $title = 'Proposez votre hôtel';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- H1 de la page ajout_prop_hotel --> 

	<h1 id="inscription"> Proposer un Hôtel </h1>
	
	<?php if(isset($_GET["notif"])){
		if($_GET["notif"] == "ok"){
			echo "<p class='succes'> Votre proposition a été correctement envoyée </p>";
		}else{
			echo "<p class='echec'> Désolé votre proposition n'a pas été correctement envoyée </p>";
	}}?>

<!--- Formulaire de proposition d'hôtel --> 

	<form id="form_user" name="form_user" method="post" action="?cat=visiteur&module=propositions&action=ajout_prop_hotel">

		<label>Pays</label>

			<select name="pays">
			  	<option value="" disabled selected>Destination</option>
			    <option value="Pérou">Pérou</option>
			    <option value="Inde">Inde</option>
			    <option value="Australie">Australie</option>
			    <option value="France">France</option>
		 	</select>
	
		<div class="clear"></div>

		<label for="etab">Etablissement</label>
		<input  id="etab" name="etab" maxlength="25" type="text" required/>

		<div class="clear"></div>

		<label for="adresse">Adresse</label>
		<input  id="adresse" name="adresse" type="text" maxlength="125" required/>

		<div class="clear"></div>

		<label for="email">Email</label>
		<input  id="email" name="email" maxlength="55" type="email" required/>

		<div class="clear"></div>

		<label for="descr">Description</label>
		<textarea id="descr" name="descr" maxlength="155" required></textarea>

		<div class="clear"></div>

		<input id="submit" type="submit" value="Proposer" />
		
		<div class="clear"></div>

	</form>

</div>
<!--- Script JS permettant la vérification du formulaire --> 

<script type="text/javascript" src="assets/js/formulaire_verif.js"></script>   

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>