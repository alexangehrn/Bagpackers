function ajax_lire_photos() {			

    $('.mes-images').on('click', '.lightbox', function() { 
				$("#imagebox").load("?cat=visiteur&module=photos&action=lire_photos&id_photo="+$(this).attr("href"));	
				$("#conteneur").show();
				$("#imagebox").show();
				return false;
						});

			$("#choix-voyages").submit(function(){
				$(".mes-images").load("?cat=visiteur&module=photos&action=lire_photos&id="+$("#mon_action").val());			
				var help = $( "#choix-voyages option:selected" ).text();
				if($("#choix-voyages option:selected" ).val() != 0){
				$("#nom_pays").replaceWith("<div id='nom_pays'><h3 id='pays'>"+help+"</h3></div>");
				}
				else{
				$("#nom_pays").replaceWith("<div id='nom_pays'></div>");
				}
return false;
				
						});

			};
ajax_lire_photos();