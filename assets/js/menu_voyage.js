function menu_voyage(){

    $('#etape_button').click(function(){
        $("#etapes").css('display','block');  
        $("#budget").css('display','none');  
        $("#inscription-page").css('display','none'); 
        $("h1").replaceWith('<h1 id="voyage-seul"> Etapes du Voyage </h1>')
        return false; 
    });

    $('#budget_button').click(function(){
        $("#etapes").css('display','none');  
        $("#budget").css('display','block');  
        $("#inscription-page").css('display','none');  
        $("h1").replaceWith('<h1 id="voyage-seul">Budget </h1>')

        return false;
    });
        
    $('#inscription_button').click(function(){
        $("#etapes").css('display','none');  
        $("#budget").css('display','none');  
        $("#inscription-page").css('display','block');  
        $("h1").replaceWith('<h1 id="voyage-seul"> Inscription </h1>')

        return false;
    });
}
menu_voyage();