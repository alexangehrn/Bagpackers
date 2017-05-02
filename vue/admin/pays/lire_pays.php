<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Liste des pays dispo</h1>
			<?php foreach($pays as $country){ ?>
				<div class="well pays">
				<h2 >
					<?php echo $country['nom_pays']; ?>
				</h2>
				<p>
					<?php echo $country['descr_pays']; ?>
				</p>
				<p>
					<a href="?cat=admin&module=pays&action=update_pays&id=<?php echo $country['id_pays'];?>"> Modifier </a>
				</p>
			</div>
				<?php }  ?>
