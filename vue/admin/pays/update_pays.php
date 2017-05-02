<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
	<h1>Modifier pays</h1>
	<div class="well">
	<form method="post" action="?cat=admin&module=pays&action=update_pays">

		<div class="form-group">
			<input id="nom_pays" name="nom_pays" class="form-control" type="text" placeholder="Nom pays" value="<?php echo $pays["nom_pays"]; ?>" required/>
		</div>
		<div class="form-group">
		<textarea id="descr_pays" name="descr_pays" class="form-control" rows="10" cols="100" placeholder="Contenu..." required><?php echo $pays['descr_pays'];?>
		</textarea><br/>
		<input type="hidden" name="id_pays" value="<?php echo $pays['id_pays']; ?>">
		<input type="submit" value="Enregistrer" class="btn btn-success"/><input type="reset" value="Effacer" class="btn btn-warning"/>
		</div>
</form>
</div> 
