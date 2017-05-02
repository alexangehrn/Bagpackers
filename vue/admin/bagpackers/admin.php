<?php include ("vue/admin/layout/header.admin.php"); ?>

<div id="content">


		<?php 
			if (isset($_SESSION["user"]))
				{
					if(($_SESSION["user"]["id_admin"]))
					{ ?>
						<div id="user-button" style="text-align:center">
							<a class="btn btn-primary" href="?cat=admin&module=voyages&action=lire_voyages" class="button1">Consulter les voyages</a> 
							<a class="btn btn-primary" href="?cat=admin&module=users&action=lire_users" class="button1">Gérer les utilisateurs</a>
							<a class="btn btn-primary" href="?cat=admin&module=messages&action=lire_messages" class="button1">Gérer les messages d'utilisateur</a>
							<a class="btn btn-primary" href="?cat=admin&module=hotels&action=lire_hotels" class="button1">Gérer les propositions d'hôtels</a>
						</div>
				<?php }
					else
						{
							header('location:?cat=visiteur&module=users&action=login_user');
						}
				}
		?>
</div>
