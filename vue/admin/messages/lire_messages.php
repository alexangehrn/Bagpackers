<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Gérer les messages</h1>
			<?php foreach($contacts as $contact){ ?>
			<div class="well pays">
				<h3><?php echo $contact['nom_contact']; ?></h3>
				<p>
					<?php echo $contact['date_contact']; ?>
				</p>
				<p>
					<?php echo $contact['descr_contact']; ?>
				</p>
				<p><b>
					<?php echo $contact['email_contact']; ?>
				</b></p>
					<a class="btn btn-primary" href="?cat=admin&messages&action=supprimer_message&id=<?php echo $contact['id_contact']; ?>">Supprimer</a>
			</div>
			<?php }  ?>
