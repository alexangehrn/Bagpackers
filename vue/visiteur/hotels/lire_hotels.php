<?php  $title='Tous nos hôtels';
include ("vue/visiteur/layout/header.inc.php"); ?>

<div id="content">

<!--- Bandeau d'entete de page --> 

	<div id="bandeau-voyage">

		<div>
			<h2 id="concept"> Découvrez nos hôtels !</h2>
		</div>

	</div>

<!--- H1 de la page lire_hotels --> 

	<h1 id="inscription"> Nos hôtels </h1>

<!--- Bloc Hotel --> 

	<?php foreach ($hotels as $hotel) { ?>

		<div class="etapes-bloc1"> 

			<div class="white-bloc1">

				<div class="img-hotel">
					<img alt="Photo Voyage" src="<?php echo $hotel["couverture_hotel"];?>">
				</div>

				<h3><?php echo $hotel["nom_hotel"];?></h3>

				<p class="sous"><?php echo $hotel["ville_hotel"];?> - <?php echo $hotel["nom_pays"];?></p>

				<p> 
				<?php echo $hotel["descr_hotel"];?>			
				</p>

				<p class="plus-bloc">
					<a class="plus buttonp" href="?cat=visiteur&module=hotels&action=lire_hotel&id=<?php echo $hotel["id_hotel"];?>"> En savoir plus </a>
				</p>		

				<div class="clear"></div>

			</div>

		</div>

	<?php } ?>

</div>

<?php include ("vue/visiteur/layout/footer.inc.php"); ?>