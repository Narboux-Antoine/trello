///////////AJOUTER///////////
$("#button1").click(function(){
  var newSecteur = $("input[name=ajouter]").val();
    ///////////ON MET LA PREMIERE LETTRE EN MAJUSCULE///////
  var aaa=newSecteur[0];
  aaa=aaa.toUpperCase();
    var bbb="";
  for(var i=1;i<newSecteur.length;i++){
   bbb=newSecteur[i];
    aaa=aaa+bbb;
    }

  if(newSecteur.length == 0){
    alert("Veuillez indiquer un nom de secteur valide.")
  }
  else {
    $.ajax({
      method:"POST",
      url:"index?page=admin&status=controler",
      data: "value1=" + aaa,
      success: function(msg){
        var id = msg;
        var html = '<option value = "'+ id +'">'+ aaa +'</option>';
        $('select[name=secteur]').append(html); // Ajoute dans select secteur
        $("input[name=ajouter]").val(''); // Vide l'input
        // $('#hide2').find('input[type=text]').val(newSecteur+" a été ajouté");
        // $( "#hide2" ).show();
        // $( "#hide2" ).delay(5000).hide(0);
        // $('select[name=secteur]').find(':selected').text(newSecteur);
        window.location.href ="index.php?page=admin&msg="+msg;
        }
    });
  }
});

/////////MODIFIER///////////
$("#button2").click(function(){
  var enable = $(this).attr('disabled');
  if (enable != "disabled"){
    $( "#hide1" ).show();
    var text = $("select[name=secteur]").find(':selected').text();
    $("input[name=modifier]").val(text);
  }
});


  /////////VALIDER MODIFIER///////////
  $("#button5").click(function(){
    var modif = $("input[name=modifier]").val();
    var amodif = $("select[name=secteur]").val();
    var text = $("select[name=secteur]").find(':selected').text();
    ///////////ON MET LA PREMIERE LETTRE EN MAJUSCULE///////
    var aaa=modif[0];
    aaa=aaa.toUpperCase();
      var bbb="";
    for(var i=1;i<modif.length;i++){
     bbb=modif[i];
      aaa=aaa+bbb;
      }

    $.ajax({
      method:"POST",
      url:"index?page=admin&status=controler",
      data: "value3=" + aaa +"&value2=" +text ,
      success: function(msg){
        // $('input[name=msg]').val(text+" a bien été modifié par "+modif);
        // $( "#hide1" ).hide(0);
        // $( "#hide2" ).show();
        // $( "#hide2" ).delay(5000).hide(0);
        // //$('input[name=msg]').val('');
        // $('input[name=modifier]').val('');
        //$('select[name=secteur]').delay(1000).find(':selected').text(amodif);
        window.location.href ="index.php?page=admin&msg="+msg;

        }
      });

    });

/////////BOUTON SUPPRIMER/////////
$("#button33").click(function(){
  var enable = $(this).attr('disabled');
  if (enable == "disabled"){
      $('#exampleModal1').foundation('open');
  }
});

/////////BOUTON CONFIRMER ET SUPPRESSION/////////
$("#button3").click(function(){
  var enable = $(this).attr('disabled');
  if (enable != "disabled"){
    var asupprim = $("select[name=secteur]").find(':selected').text();
    $.ajax({
      method:"POST",
      url:"index?page=admin&status=controler",
      data: "value4=" + asupprim,
      success: function(msg){
             $('select[name=secteur]').find(':selected').remove(); // Ajoute dans select secteur
         window.location.href ="index.php?page=admin&msg="+msg;
      }
      });
    }
});

//////////DETECTION MODIFIER SUPPRIMER/////////
function Detection(val) {
    var id = val;
    $.ajax({
      method:"POST",
      url:"index?page=admin&status=controler",
      data: "value5=" + id  ,
      success: function(msg){
        if(msg==30){
          $("#button2").attr("disabled", true);
          $("#button33").attr("disabled", true);
        }
        else {
          $("#button2").attr("disabled", false);
          $("#button33").attr("disabled", false);
        }
      }
    });
}
