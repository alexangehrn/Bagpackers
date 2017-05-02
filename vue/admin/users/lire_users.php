<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h2>Gérer les utilisateurs</h2>
			<?php foreach($utilisateurs as $utilisateur){ ?>
				<div class="form-group">
					<p> Nom : <?php echo $utilisateur['display_name']; ?> </p>
				</div>
				<div class="form-group">
					<p> Adresse Mail : <?php echo $utilisateur['email']; ?> </p>
				</div>
				<div class="form-group">
					<p> Date d'inscription : <?php echo $utilisateur['date_inscription']; ?> </p>
				</div>
				<div class="form-group">
					<a href="?cat=admin&module=users&action=supprimer_user&id=<?php echo $utilisateur['id_user']; ?>">Supprimer</a>
				</div>
				<?php }  ?>

