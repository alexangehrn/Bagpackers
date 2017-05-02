<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>
			<h1>Gérer les voyages</h1>
			<div class="top">
			<?php foreach($voyages as $voyage){ ?>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
					<img src="<?php echo $voyage['couverture_voyage']; ?>" alt="" />
				    <div class="caption">
						<h3><a href="?cat=admin&module=voyages&action=lire_voyage&id=<?php echo $voyage["id_voyage"] ?>"><?php echo $voyage['titre_voyage']; ?></a></h3>
				<p><b>
					<?php echo $voyage['date_limite']; ?>
				</b></p>
				
					<a class="btn btn-primary" href="?cat=admin&module=voyages&action=update_voyage&id=<?php echo $voyage["id_voyage"] ?>">Update </a>
				
					<a class="btn btn-primary" href="?cat=admin&module=voyages&action=supprimer_voyage&id=<?php echo $voyage['id_voyage']; ?>">Supprimer</a>
				</div>
			    </div>
		  	  </div>
			</div>
			<?php }  ?>
			<div class="clear"></div> 
			<div id="pagination">
				<ul class="pagination">
					<?php 
						$count = ceil($count/nb_post_page);
						for($i=1; $i<=$count; $i++)
						{
							echo "<li><a href='?page=" .$i ."'>" . $i . "</a></li>";
						} 
					?>
				</ul>
			</div>
