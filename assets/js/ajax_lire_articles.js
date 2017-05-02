function ajax_lire_articles(){    


	function tafonction() {
		
		var last_id = $(".article:first").attr("id");

		$.get("?cat=visiteur&module=articles&action=lire_articles&id="+last_id, function(data) {
    	$(data).prependTo("#articless").fadeIn("slow");
		});

	}; 			
	setInterval(tafonction,2000);
	

	$("form#publication").submit(function() {

		$.post("?cat=visiteur&module=articles&action=ajouter_article&ajax",$("form#publication").serialize(),function(texte){
			$("#publication textarea#pub").val('');  

			$("div#zoneTexte").append(texte);
			$("div#zoneTexte p").css("display","block");

			$('.succes').delay(4000).fadeOut(2000);

		})
		return false;
	});

	$('#articless').on('submit', '.comment', function() {
		var ok = $(this).parent(".article").attr("id"); 
		
		$.post("?cat=visiteur&module=articles&action=ajouter_commentaire_article&ajax",$(this).serialize(),function(texte){
			       		$("input#com").val(''); 
			       		$("#"+ok+".article .test").prepend(texte);             
		})
		return false;
	});	


};
ajax_lire_articles();
