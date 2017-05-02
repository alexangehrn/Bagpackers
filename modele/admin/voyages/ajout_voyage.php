<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function ajouter_voyage($voyage, $adresse)
{

	global $connection;
		
	try
	{	

		$curseur = $connection->prepare("INSERT into Bp_voyages
				(descr_voyage, sloggan, datedebut_voyage, datefin_voyage, date_limite, nombre_limite_participant, titre_voyage, id_pays_voyage, nbre_participant, couverture_voyage)
				values
				(:descr_voyage, :sloggan, :datedebut_voyage, :datefin_voyage, :date_limite, :participant, :titre_voyage, :pays, :nbre_participant, :couverture_voyage)");
		$curseur->bindValue(':descr_voyage', $voyage["descr_voyage"], PDO::PARAM_STR);
		$curseur->bindValue(':sloggan', $voyage["sloggan"], PDO::PARAM_STR);
		$curseur->bindValue(':datedebut_voyage', $voyage["date_debut"], PDO::PARAM_STR);
		$curseur->bindValue(':datefin_voyage', $voyage["date_fin"], PDO::PARAM_STR);
		$curseur->bindValue(':date_limite', $voyage["date_limite"], PDO::PARAM_STR);
		$curseur->bindValue(':participant', $voyage["participant"], PDO::PARAM_INT);
		$curseur->bindValue(':titre_voyage', $voyage["titre_voyage"], PDO::PARAM_STR);
		$curseur->bindValue(':nbre_participant', $voyage["nbre_participant"], PDO::PARAM_INT);
		$curseur->bindValue(':pays', $voyage['pays'], PDO::PARAM_INT);
		$curseur->bindValue(':couverture_voyage', $adresse, PDO::PARAM_STR);
		$retour = $curseur->execute();

		return true;
	}
	catch (Exception $e)
	{
		return false;
	}
}