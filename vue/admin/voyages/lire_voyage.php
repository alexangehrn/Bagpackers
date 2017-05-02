<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>

<div class="form-group">


	<div class="well">
	<h3> Liste users du voyage </h3>
	<?php foreach($voyage_users as $voyage_user){ ?>
		<p>
			<?php echo $voyage_user['login']; ?>
		</p>
	<?php } ?>
	</div>


	<div class="well">
	<h3> Ajouter une étape </h3>

	<form method="post" action="?cat=admin&module=voyages&action=ajout_etape&id=<?php echo $_GET['id'];?>" id="form_post" name="form_post" enctype="multipart/form-data">
				<div class="form-group">
					<select class="form-control" name="hotel" id="pays" required>
					<option value="0">Hôtel de l'étape</option>
					<?php foreach($hotels as $hotel){ ?>
					<option value='<?= $hotel["id_hotel"]; ?>'><?php echo $hotel["nom_hotel"]; ?></option>
					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<input id="descr_etape" name="descr_etape" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
					<input id="titre_etape" name="titre_etape" class="form-control" rows="10" cols="100" placeholder="titre" required/><br/>
					<input type="hidden" value="<?php echo $_GET['id'];?>" id="sejour" name="id_sejour" />
					<label for="ch_file">Photo d'étape'</label><input name="ch_file[]" type="file" /><br/>
					<input id="numero" name="numero_etape" class="form-control" type="number" placeholder="numéro étape" required/><br/>
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
					<input type="submit" value="Envoyer" class="btn btn-success"/>
				</div>
	</form>
	</div>

	<div class="well">
	<h3> Ajouter une image au voyage</h3>

	<form method="post" action="?cat=admin&module=voyages&action=ajout_image_voyage&id=<?php echo $_GET['id'];?>" id="form_post" name="form_post" enctype="multipart/form-data">
				<div class="form-group">
					<input id="descr_image_voyage" name="descr_image_voyage" class="form-control" rows="10" cols="100" placeholder="descr" required/><br/>
					<input type="hidden" value="<?php echo $_GET['id'];?>" id="sejour" name="sejour" />
					<label for="ch_file">Photo d'étape'</label><input name="ch_file[]" type="file" /><br/>
					<input id="numero" name="numero_image" class="form-control" type="number" placeholder="numéro image" required/><br/>
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
					<input type="submit" value="Envoyer" class="btn btn-success"/>
				</div>
	</form>
	</div>
</div>