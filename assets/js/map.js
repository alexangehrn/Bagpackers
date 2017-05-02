function map(){

    $("#origin-map").mousemove(
      function(){ 
        $("#pays img").attr('src','assets/images/carte.png'); 
    });

    $("#map-amerique").mousemove(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris.jpg');
        $("#name-amerique a").css('border-top','solid 3px #a7343d'); 
        $("#name-amerique a").css('border-bottom','solid 3px #a7343d'); 
        $("#name-france a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-inde a").css('border','none');  
        $("#desc-amerique").css('display','block'); 
        $("#desc-france").css('display','none');  
        $("#desc-inde").css('display','none');  
        $("#desc-australie").css('display','none');  
     });
     
    $("#map-france").mousemove(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-noire.jpg');
        $("#name-france a").css('border-top','solid 3px #a7343d'); 
        $("#name-france a").css('border-bottom','solid 3px #a7343d'); 
        $("#name-amerique a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-inde a").css('border','none');  
        $("#desc-amerique").css('display','none');  
        $("#desc-france").css('display','block');  
        $("#desc-inde").css('display','none');  
        $("#desc-australie").css('display','none');  
     });
    
    $("#map-australie").mousemove(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris-fonce.jpg');
        $("#name-australie a").css('border-top','solid 3px #a7343d'); 
        $("#name-australie a").css('border-bottom','solid 3px #a7343d'); 
        $("#name-france a").css('border','none'); 
        $("#name-amerique a").css('border','none');
        $("#name-inde a").css('border','none');  
        $("#desc-amerique").css('display','none');  
        $("#desc-france").css('display','none'); 
        $("#desc-inde").css('display','none');   
        $("#desc-australie").css('display','block');  
     });
    
     $("#map-inde").mousemove(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris-moyen.jpg');
        $("#name-inde a").css('border-top','solid 3px #a7343d'); 
        $("#name-inde a").css('border-bottom','solid 3px #a7343d'); 
        $("#name-france a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-amerique a").css('border','none'); 
        $("#desc-amerique").css('display','none');
        $("#desc-france").css('display','none');    
        $("#desc-inde").css('display','block');  
        $("#desc-australie").css('display','none');  
     });

    $("#name-amerique a").click(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris.jpg');
        $("#name-amerique a").css('border-top','solid 3px #a7343d'); 
        $("#name-amerique a").css('border-bottom','solid 3px #a7343d');
        $("#name-france a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-inde a").css('border','none'); 
        $("#desc-amerique").css('display','block');     
        $("#desc-france").css('display','none');  
        $("#desc-inde").css('display','none');  
        $("#desc-australie").css('display','none');  
        return false;
    });
    
     $("#name-france a").click(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-noire.jpg');
        $("#name-france a").css('border-top','solid 3px #a7343d'); 
        $("#name-france a").css('border-bottom','solid 3px #a7343d');  
        $("#name-inde a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-amerique a").css('border','none');  
        $("#desc-amerique").css('display','none');  
        $("#desc-france").css('display','block');  
        $("#desc-inde").css('display','none');  
        $("#desc-australie").css('display','none');  
        return false;
    });
    
     $("#name-australie a").click(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris-fonce.jpg'); 
        $("#name-australie a").css('border-top','solid 3px #a7343d'); 
        $("#name-australie a").css('border-bottom','solid 3px #a7343d'); 
        $("#name-france a").css('border','none'); 
        $("#name-inde a").css('border','none');
        $("#name-amerique a").css('border','none');  
        $("#desc-amerique").css('display','none');  
        $("#desc-france").css('display','none');  
        $("#desc-inde").css('display','none');  
        $("#desc-australie").css('display','block');  
        return false;
    });
    
     $("#name-inde a").click(
      function(){ 
        $("#pays img").attr('src','assets/images/carte-gris-moyen.jpg');
        $("#name-inde a").css('border-top','solid 3px #a7343d'); 
        $("#name-inde a").css('border-bottom','solid 3px #a7343d');  
        $("#name-france a").css('border','none'); 
        $("#name-australie a").css('border','none');
        $("#name-amerique a").css('border','none');  
        $("#desc-amerique").css('display','none');  
        $("#desc-france").css('display','none');  
        $("#desc-inde").css('display','block');  
        $("#desc-australie").css('display','none');  
        return false;
    });
}
map();