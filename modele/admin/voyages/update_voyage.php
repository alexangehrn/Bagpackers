<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function update_voyage($voyage, $adresse){

	global $connection;

	try
	{	
		$curseur = $connection->prepare("UPDATE Bp_voyages
				set id_pays_voyage = :id_pays_voyage,
					descr_voyage = :descr_voyage,
					titre_voyage = :titre_voyage,
					sloggan = :sloggan,
					couverture_voyage = :couverture_voyage
				where id_voyage = :id_voyage");
		$curseur->bindValue(':id_voyage', $voyage["id_voyage"], PDO::PARAM_INT);
		$curseur->bindValue(':id_pays_voyage', $voyage["pays"], PDO::PARAM_INT);
		$curseur->bindValue(':descr_voyage',  $voyage["descr_voyage"], PDO::PARAM_STR);
		$curseur->bindValue(':titre_voyage',  $voyage["titre_voyage"], PDO::PARAM_STR);
		$curseur->bindValue(':sloggan',  $voyage["sloggan"], PDO::PARAM_STR);
		$curseur->bindValue(':couverture_voyage',  $adresse, PDO::PARAM_STR);

		$retour = $curseur->execute();
		
		return true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
		exit;
	}
}