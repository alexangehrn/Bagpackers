function lightbox(){
  
    
    $('#conteneur').on("click", '#fermer',function(){
        
        $('#conteneur').hide();
    

    });
    $('#conteneur').on('click', '.delete', function(){ 
      var id_delete = $(this).attr("href");

        $.ajax({
           url: '?cat=visiteur&module=photos&action=delete_comment_image&id='+$(this).attr("href"),
           type: 'DELETE',
           success: function(response) {
            $("div#"+id_delete).hide();
           }
        });
        return false;

    });
    

    $('#conteneur').on('submit', '#comment', function(){ 

        $.post("?cat=visiteur&module=photos&action=ajout_comment_image",$("form#comment").serialize(),function(texte){
        $("#commentss").append(texte);             
        $("#comment input#com").val('');  

        })

        return false;
    });
     
}
lightbox();