<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>



		<div class="well">
	<h3> Ajouter un hôtel </h3>

				<div class="form-group">
					<select class="form-control" name="pays" id="pays" required>
					<option value="0">Pays</option>
					<?php foreach($pays as $country){ ?>
					<option value='<?= $country["id_pays"]; ?>'><?php echo $country["nom_pays"]; ?></option>
					<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<input id="descr_hotel" name="descr_hotel" class="form-control" rows="10" cols="100" placeholder="descr" required/>
					<input id="adresse_hotel" name="adresse_hotel" class="form-control" rows="10" cols="100" placeholder="Adresse" required/>
					<input id="ville_hotel" name="ville_hotel" class="form-control" rows="10" cols="100" placeholder="Ville" required/>
					<input id="prix_nuit" name="prix_nuit" class="form-control" rows="10" cols="100" placeholder="Prix par nuit" required/>
					<label for="ch_file">Votre photo</label><input name="ch_file[]" type="file" /><br/>
					<input id="descr_image_hotel" name="descr_image_hotel" class="form-control" rows="10" cols="100" placeholder="#image" required/><br/>
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />					<input type="submit" value="Envoyer" class="btn btn-success"/>
				</div>
	</div>