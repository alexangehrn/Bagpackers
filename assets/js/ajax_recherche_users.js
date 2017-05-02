//AJAX
function ajax_recherche_users(){

			$('#choix-voyages').submit(function() {
		
		$.post("?cat=visiteur&module=profils&action=recherche_profil&ajax",$(this).serialize(),function(texte){
			       		$("input#com").val(''); 
			       		$("#photos_all").replaceWith('<div id="photos_all">'+texte+'</div>');             
		});
		return false;
	});	
			
};
ajax_recherche_users();