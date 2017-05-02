<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Gérer les propositions de Voyage</h1>
			<?php foreach($propositions as $proposition){ ?>
			<div class="well pays">
				<h3>
					<?php echo $proposition['display_name']; ?></a>
				</h3>
				<h4>
					<?php echo $proposition['pays']; ?>
				</h4>
				<p>
					<?php echo $proposition['descr_proposition']; ?>
				</p>
				<p>
					<?php echo $proposition['date_proposition']; ?>
				</p>
		
					<p><b> Adresse Mail : <?php echo $proposition['email']; ?> </b></p>

					<a class="btn btn-primary" href="?cat=admin&module=propositions&action=supprimer_prop_voyage&id=<?php echo $proposition['id_proposition_voyage']; ?>">Supprimer</a>
			</div>
				<?php }  ?>
