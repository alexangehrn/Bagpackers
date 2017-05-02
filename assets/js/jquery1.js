 window.onload = function(){

  //menu principal 

    $(".nav ul li").hover(
      function(){ $(this).find("ul").fadeIn('slow'); } ,
      function(){ $(this).find("ul").fadeOut('slow'); } 
    );

  //reseaux sociaux

    $("#facebook").mousemove(
       function(){ 
        $("img#facebook").attr('src','assets/images/facebook2.png');
        $("img#instagram").attr('src','assets/images/instagram.png');
        $("img#pinterest").attr('src','assets/images/pinterest.png');
        $("img#twitter").attr('src','assets/images/twitter.png');
    });

    $("#pinterest").mousemove(
       function(){ 
        $("img#facebook").attr('src','assets/images/facebook.png');
        $("img#instagram").attr('src','assets/images/instagram.png');
        $("img#pinterest").attr('src','assets/images/pinterest2.png');
        $("img#twitter").attr('src','assets/images/twitter.png');
    });

    $("#twitter").mousemove(
       function(){ 
        $("img#facebook").attr('src','assets/images/facebook.png');
        $("img#instagram").attr('src','assets/images/instagram.png');
        $("img#pinterest").attr('src','assets/images/pinterest.png');
        $("img#twitter").attr('src','assets/images/twitter2.png');
    });

    $("#instagram").mousemove(
       function(){ 
        $("img#facebook").attr('src','assets/images/facebook.png');
        $("img#instagram").attr('src','assets/images/instagram2.png');
        $("img#pinterest").attr('src','assets/images/pinterest.png');
        $("img#twitter").attr('src','assets/images/twitter.png');
    });


  //notifications

    $('.echec').delay(4000).fadeOut(2000);
    $('.succes').delay(4000).fadeOut(2000);


  //Variations selon la taille de la fenêtre

   var largeur = $(window).width();
   var milargeur = ($(window).width())/2;
   var hauteur = ($(window).height())/2;

   if (largeur<900){
       
        $("#social-networks").css({
          'display':' none'
        });

        $("#desc-amerique").css({
          'display':'block',
          'position':'initial',
          'margin':'auto',
          'margin-bottom':'20px',
        });

        $("#desc-france").css({
          'display':'block',
          'position':'initial',
          'margin':'auto',
          'margin-bottom':'20px',
        });  

        $("#desc-inde").css({
          'display':'block',
          'position':'initial',
          'margin':'auto',
          'width':'200px',
          'margin-bottom':'20px',
        });  

        $("#desc-australie").css({
          'display':'block',
          'position':'initial',
          'margin':'auto',
          'width':'200px',
          'margin-bottom':'20px',
        }); 

        $("#descriptions").css({
          'width':'auto',
          
        });  
         
           
        }

   else if (largeur<1200){
              $("#social-networks").css('display',' block');

     
       $("#inscription").css({
          'margin-top':'0px'
        });

       $("#social-networks").css({
          'position':' fixed',
          'top': hauteur-100,
          'right': '0px'
       });

       $("#desc-inde").css({
          'left':'400px',
          'display':'none',
          'top':'-480px',
          'width':'300px',
        });  

       $("#desc-australie").css({
          'left':'500px',
          'display':'none',
          'top':'-350px',
          'width':'300px',
       });  

       $("#desc-amerique").css({
          'display':'none',
          'left':'350px',
          'top':'-250px'
       }); 

       $("#desc-france").css({
          'display':'none',
          'left':'450px',
          'top':'-490px',
       });  
              
      
    }


    else{
                $("#social-networks").css('display',' block');

      
       $("#inscription").css({
          'margin-top':'0px'
       });

       $("#social-networks").css({
          'position':' fixed',
          'top': hauteur-100,
          'right': '0px'
       }); 

       $("#desc-inde").css({
          'left':'600px',
          'display':'none',
          'top':'-480px',
          'width':'300px'
       });   

       $("#desc-australie").css({
          'left':'700px',
          'display':'none',
          'top':'-350px',
          'width':'300px'
        });  

       $("#desc-amerique").css({
          'display':'none',
          'left':'350px',
          'top':'-250px'
        }); 

       $("#desc-france").css({
          'display':'none',
          'left':'450px',
          'top':'-490px'
        });  
           

    }

   $( window ).resize(function() {
      
      largeur = ($(window).width());
      milargeur = ($(window).width()/2);
      hauteur = ($(window).height()/2);

         if (largeur<900){
          
           $("#social-networks").css({
              'display':' none',

            });

           $("#desc-amerique").css({
              'display':'block',
              'left':milargeur-100,
              'top':'0px'
            }); 

           $("#desc-france").css({
              'display':'block',
              'left':milargeur-100,
              'top':'20px'
            });  

           $("#desc-inde").css({
              'display':'block',
              'left':milargeur-100,
              'top':'40px',
              'width':'200px'
            });  

           $("#desc-australie").css({
              'display':'block',
              'left':milargeur-100,
              'top':'60px',
              'width':'200px'
            });
       
   
        }
   
       else if (largeur<1200){
         
          $("#inscription").css('margin-top','0px');   
          $("#social-networks").css('position',' fixed');
          $("#social-networks").css('display',' block');

          $("#social-networks").css('top', hauteur-100);
          $("#social-networks").css('right', '0px');
          $("#desc-inde").css('left','400px');  
          $("#desc-australie").css('left','500px');  
          $("#desc-amerique").css('display','none');  
          $("#desc-amerique").css('left','350px');  
          $("#desc-amerique").css('top','-250px'); 
          $("#desc-france").css('display','none');  
          $("#desc-france").css('left','450px');  
          $("#desc-france").css('top','-490px');  
          $("#desc-inde").css('display','none');  
          $("#desc-inde").css('top','-480px');  
          $("#desc-australie").css('display','none');  
          $("#desc-australie").css('top','-350px');  
          $("#desc-inde").css('width','300px');  
          $("#desc-australie").css('width','300px');
          $("#tdb a").html('Tableaux de Bord');
  

       }

      else{
                 $("#social-networks").css('display',' block');
           $("#inscription").css('margin-top','0px');         
          $("#social-networks").css('position',' fixed');
          $("#social-networks").css('top', hauteur-100);
          $("#social-networks").css('right', '0px');
          $("#desc-inde").css('left','600px');  
          $("#desc-australie").css('left','700px'); 
          $("#desc-amerique").css('display','none');  
          $("#desc-amerique").css('left','350px');  
          $("#desc-amerique").css('top','-250px'); 
          $("#desc-france").css('display','none');  
          $("#desc-france").css('left','450px');  
          $("#desc-france").css('top','-490px');  
          $("#desc-inde").css('display','none');  
          $("#desc-inde").css('top','-480px');  
          $("#desc-australie").css('display','none');  
          $("#desc-australie").css('top','-350px');  
          $("#desc-inde").css('width','300px');  
          $("#desc-australie").css('width','300px');
          $("#tdb a").html('Tableaux de Bord');

 }



});   }; 
           
           

     
     





