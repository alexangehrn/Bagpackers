function menu_groupe_voyage(){

    $('#discussion_button').click(function(){
        $("#discussion").css('display','block');  
        $("#membres").css('display','none');  
        $("#infos").css('display','none'); 
        return false; 
    });
    
    $('#membres_button').click(function(){
        $("#discussion").css('display','none');  
        $("#membres").css('display','block');  
        $("#infos").css('display','none'); 
        return false; 
    });

    $('#infos_button').click(function(){
        $("#discussion").css('display','none');  
        $("#membres").css('display','none');  
        $("#infos").css('display','block'); 
        return false; 
    });
}
menu_groupe_voyage();