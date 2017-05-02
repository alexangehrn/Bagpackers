<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Gérer les proposition d'hôtels</h1>
			<?php foreach($contacts as $contact){ ?>
			<div class="well pays">

				<h3>
					<?php echo $contact['nom_hotel']; ?></a>
				</h3>
				<p>
					<?php echo $contact['date_hotel']; ?>
				</p>
				<p>
					<?php echo $contact['descr_contact_hotel']; ?>
				</p>
				<p><b>
					<?php echo $contact['email_hotel']; ?>
				</b></p>
				
					<a class="btn btn-primary" href="?cat=admin&module=propositions&action=supprimer_prop_hotel&id=<?php echo $contact['id_contact_hotel']; ?>">Supprimer</a>
				</div>
			<?php }  ?>
