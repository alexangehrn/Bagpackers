function ajax_groupe_voyage(){

	function tafonction() {
		
		var last_id = $(".article:first").attr("id");
		var id_voy = $("input#id_voy").val();
		
		$.get("?cat=visiteur&module=voyages&action=lire_groupe_voyage&id="+id_voy+"&last_id="+last_id, function(data) {
    	$(data).prependTo("#articless").fadeIn("slow");
		});

	}; 			
	setInterval(tafonction,5000);

	$("form#publication").submit(function() {

		$.post("?cat=visiteur&module=messages&action=ajout_message&ajax",$("form#publication").serialize(),function(texte){
			
			$("div#zoneTexte").append(texte);
			$("div#zoneTexte p").css("display","block");
			$("#publication textarea#pub").val(''); 
			$('.succes').delay(4000).fadeOut(2000);

		})

		return false;
	});

	$('#articless').on('submit', '.comment', function() {
		var ok = $(this).parent(".article").attr("id"); 
		
		$.post("?cat=visiteur&module=messages&action=ajout_comment_message&ajax",$(this).serialize(),function(texte){
			$(".comment input#com").val('');
       		$("#"+ok+".article .test").prepend(texte)     
		})

		return false;
	});

};
ajax_groupe_voyage();