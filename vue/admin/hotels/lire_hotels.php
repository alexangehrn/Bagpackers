<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Gérer les hôtels</h1>
			<div class="top">
			<?php foreach($hotels as $hotel){?>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="<?php echo $hotel['couverture_hotel']; ?>" alt="">
			      <div class="caption">
			        <h3><?php echo $hotel['nom_hotel']; ?></h3>
			        <p><?php echo $hotel['descr_hotel']; ?></p>
			         <p><b><?php echo $hotel['nom_pays']; ?></b></p>
			         <p><b><?php echo $hotel['prix_nuit']; ?>€</b></p>
			        <p><a class="btn btn-primary" href="?cat=admin&module=hotels&action=supprimer_hotel&id=<?php echo $hotel['id_hotel']; ?>">Supprimer <span class="glyphicon glyphicon-chevron-right"></span></a></p>
			      </div>
			    </div>
		  	  </div>
			</div>
<?php } ?>


