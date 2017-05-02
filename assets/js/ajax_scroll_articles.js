function ajax_scroll_articles(){    
	$(window).scroll(function(){
		
		if ( ($(document).height() - window.innerHeight - $(window).scrollTop()) < 30) {
			
			$('#preloader').show();
			
			$.get("?cat=visiteur&module=articles&action=scroll_articles", function(reponse){
				$("div#articless").append(reponse);
				$('#preloader').hide();
			})
		}
		
	});};
ajax_scroll_articles();