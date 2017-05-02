function formulaire_verif(){
pass = true;
email = true;
pass = true;
pass2 = true;
nom = true;
num = true;
crypto = true; 
naiss = true;
card_name = true;

  $('#name').blur(function () {

      var fnom = $("#nom").val();

      if (fnom == "") {
        alert("stop");
          $("img#test").attr('src','assets/images/check_no.png');
          nom = false;
      }

      else {
          $("img#test").attr('src','assets/images/check_yes.png');
          nom = true;
      }

  });


  $('#naiss').blur(function () {

    var fnaiss = $("#naiss").val();

    if (fnaiss == "") {

      $("img#test").attr('src','assets/images/check_no.png');
        naiss = false;
    } 

    else {
       naiss = true

      if (fnaiss.match("^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$"))
      {
        var date1 = $("#naiss").val();   
        var now = new Date();
        var annee = (now.getFullYear() - 16);
        
        if(annee <10){
          var annee1 = "0"+annee;
        }
        else{
          var annee1 = annee;
        }

        var mois    = now.getMonth() + 1;

        if(mois <10){
          var mois1 = "0"+mois;
        }
        else{
          var mois1 = mois;
        }

        var jour    = now.getDate();
        
        if(jour <10){
          var jour1 = "0"+jour;
        }
        else{
          var jour1 = jour;
        }

        var date2 = annee1+"-"+mois1+"-"+jour1

        if(date1 < date2) {
          $("img#test1").attr('src','assets/images/check_yes.png');
          naiss = true;
        }

        else {
          $("img#test1").attr('src','assets/images/check_no.png');
          naiss = false;
        }  

      }
      else{
        naiss = false
      }

    }

  });

  $('#login').blur(function () {

      var flogin = $("#login").val();

      if (flogin == "") { 
          $("img#test2").attr('src','assets/images/check_no.png');
        
          login = false;
         
      }

      else {
          $("img#test2").attr('src','assets/images/check_yes.png');
          login = true;
      }
  });

  $('#email').blur(function () {

      var femail = $("#email").val();

      if (femail == "") {
          $("img#test3").attr('src','assets/images/check_no.png');
          email = false;
      }
      
      else {

        if(femail.match('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$')){
          $("img#test3").attr('src','assets/images/check_yes.png');
          email = true;
        }

        else{
          email = false;
        }
      }

  });

$('#pass').blur(function () {
    var fpass = $("#pass").val();
    if (fpass == "") { 
        $("img#test4").attr('src','assets/images/check_no.png');
        pass = false;

    }
     else {
        $("img#test4").attr('src','assets/images/check_yes.png');
        pass = true;
    }

});

$('#num').blur(function () {
    var fnum = $("#num").val();
    if (fnum.length != 16) {
        $("img#test4").attr('src','assets/images/check_no.png');
        num = false;
    }
     else {
        $("img#test4").attr('src','assets/images/check_yes.png');
        num = true;
    }

});

$('#card_name').blur(function () {
    var fcard_name = $("#card_name").val();
    if (fcard_name== "") {
        $("img#test6").attr('src','assets/images/check_no.png');
        card_name = false;
    }
     else {
        $("img#test6").attr('src','assets/images/check_yes.png');
        card_name = true;
    }
});

$('#crypto').blur(function () {
    var fcrypto = $("#crypto").val();
    if (fcrypto.length != 3) {
        $("img#test5").attr('src','assets/images/check_no.png');
        crypto = false;
    }
     else {
        $("img#test5").attr('src','assets/images/check_yes.png');
        crypto = true;
    }

});


$('#pass2').blur(function () {
    var fpass = $("#pass").val();
    var fpass2 = $("#pass2").val();
    
    if (fpass == fpass2){
        $("img#test5").attr('src','assets/images/check_yes.png');
        pass2 = true;
}
    else{
        $("img#test5").attr('src','assets/images/check_no.png'); 
        pass2 = false;
      }

});

$(".form_verif").submit(function(){ 

var fpass = $("#pass").val();
var flogin = $("#login").val();
var femail = $("#email").val();
var fpass2 = $("#pass2").val();
var fnom = $("#nom").val();
var fnum = $("#num").val();
var fcrypto = $("#crypto").val();


  if((pass != true) && (fpass== "")){ 

    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre mot de passe n\'est pas valide</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else if((login != true) && (flogin== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre login ne comporte pas assez de caractères</p>'); 
    $("#alerte p").css({"display":"block"});
    $('.echec').delay(2000).fadeOut(2000);
    return false;
  }

  else if(naiss != true){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Vous ne pouvez pas vous inscrire si vous n\'avez pas 16 ans</p>'); 
    $("#alerte p").css({"display":"block"});
    $('.echec').delay(2000).fadeOut(2000);
    return false;
  }

 
  else if((email != true) && (femail== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre email n\'est pas valide</p>'); 
    $("#alerte p").css({"display":"block"});
    $('.echec').delay(2000).fadeOut(2000);
    return false;
  }
  
  else if((pass2 != true) && (fpass2== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Vos mots de passe ne sont pas identiques</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else if((nom != true) && (fnom== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre Nom n\'est pas valide</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else if((num != true) && (fnum== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre Numéro de carte n\'est pas valide</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else if((crypto != true) && (fcrypto== "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre Cryptogramme n\'est pas valide</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else if((card_name != true) && (card_name == "")){
    $("#alerte p").remove();
    $("#alerte").append('<p class="echec"><b>Attention !</b> Votre Nom de carte n\'est pas valide</p>'); 
      $("#alerte p").css({"display":"block"});
      $('.echec').delay(2000).fadeOut(2000);
      return false;
  }
  else{
    return true;
  }
});
}
formulaire_verif();