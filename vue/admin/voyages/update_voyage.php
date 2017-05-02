<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
	<h1>Modifier le voyage</h1>
	<div class="well">
	<form method="post" action="?cat=admin&module=voyages&action=update_voyage" id="form_post" name="form_post" enctype="multipart/form-data">
				<div class="form-group">
					<select class="form-control" name="pays" id="pays" required>
					<option value="0">Pays</option>
					<?php foreach($pays as $country){ ?>
					<option value='<?= $country["id_pays"]; ?>'
						<?php if ($country["id_pays"]==$voyage["id_pays_voyage"]) echo " selected"; ?> >
						<?php echo $country["nom_pays"]; ?></option>
					<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<input id="titre_voyage" name="titre_voyage" class="form-control" type="text" placeholder="Titre" value="<?php echo $voyage["titre_voyage"]; ?>" required/>
				</div>
				<div class="form-group">
					<input id="sloggan" name="sloggan" class="form-control" type="text" placeholder="<?php echo $voyage["sloggan"]; ?>"  value="<?php echo $voyage["sloggan"]; ?>" required><?php echo $voyage["sloggan"]; ?><br/>
					<textarea id="descr_voyage" name="descr_voyage" class="form-control" rows="10" cols="100" placeholder="Contenu..." required><?php echo $voyage["descr_voyage"]; ?></textarea><br/>
					<label for="ch_file">Votre photo</label><input name="ch_file[]" id="ch_file" type="file" value="<?php echo $voyage["couverture_voyage"]; ?>" required/><br/>
					<input id="id_images" name="id_images" type="hidden" value="<?php echo $voyage["id_images_voyage"]; ?>"/>
					<input id="descr_image" name="descr_image_voyage" class="form-control" rows="10" cols="100" value="<?php echo $voyage['descr_image_voyage'];?>" required/><br/>
					<input id="id_voyage" name="id_voyage" type="hidden" value="<?php echo $_GET["id"]; ?>" />
					<input type="submit" value="Enregistrer" class="btn btn-success"/><input type="reset" value="Effacer" class="btn btn-warning"/>
				</div>
</form>
</div> 