// AJAX
function ajax_lire_voyages(){
			
		$("#choix-voyages").submit(function(){
			
			$("#bloc-voyages").load("?cat=visiteur&module=voyages&action=lire_voyages&id="+$("#mon_action").val());
			return false;
			
		});
			
};
ajax_lire_voyages();
