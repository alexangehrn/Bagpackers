<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
	<div class="well">
	<form method="post" action="?cat=admin&module=voyages&action=ajout_voyage" id="form_post" name="form_post" enctype="multipart/form-data">
				<div class="form-group">
					<select class="form-control" name="pays" id="pays" required>
					<option value="0">Pays</option>
					<?php foreach($pays as $country){ ?>
					<option value='<?= $country["id_pays"]; ?>'><?php echo $country["nom_pays"]; ?></option>
					<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<input id="descr_voyage" name="descr_voyage" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
					<input type="date" id="date_debut" name="date_debut" class="form-control" rows="10" cols="100"  required/><br/>
					<input type="date" id="date_limite" name="date_limite" class="form-control" rows="10" cols="100"  required/><br/>
					<input type="date" id="date_fin" name="date_fin" class="form-control" rows="10" cols="100"  required/><br/>
					<input type="number" id="participant" name="participant" placeholder="Nombre de participants" class="form-control" rows="10" cols="100"  required/><br/>
					<input id="titre_voyage" name="titre_voyage" class="form-control" rows="10" cols="100" placeholder="titre" required/><br/>
					<input id="sloggan_voyage" name="sloggan" class="form-control" rows="10" cols="100" placeholder="sloggan" required/><br/>
					<input type="hidden" value="0" id="nbre_participant" name="nbre_participant" class="btn btn-success"/><br/>
					<label for="ch_file">Photo de couverture</label><input name="ch_file[]" type="file" /><br/>
					<input id="descr_image" name="descr_image" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
					<label for="ch_file1">Première image à afficher</label><input name="ch_file1[]" type="file" /><br/>
					<input id="descr_image" name="descr_image_voyage" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
					<input type="hidden" name="numero_image" value="1" />
					<input type="submit" value="Envoyer" class="btn btn-success"/>
				</div>
	</form>
</div>