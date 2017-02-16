/////AFFICHER BOUTON//////
$("#button_add_liste").click(function(){
  $( "#hideliste" ).show();
});

$("#button_cancel_liste").click(function(){
  $( "#hideliste" ).hide();
});

/////AFFICHER BOUTON//////
$("#button_supprim_liste").click(function(){
  $( "#hideliste_sup" ).show();
});

$("#button_cancel_liste_supprim").click(function(){
  $( "#hideliste_sup" ).hide();
});

$("#button_ajout1").click(function(){
  $( ".hide1" ).show();
});

$("#button_cancel1").click(function(){
  $( ".hide1" ).hide();
});

/////AFFICHER BOUTON//////
$("#button_ajout2").click(function(){
  $( ".hide2" ).show();
});

$("#button_cancel2").click(function(){
  $( ".hide2" ).hide();
});
/////AFFICHER BOUTON//////
$("#button_ajout3").click(function(){
  $( ".hide3" ).show();
});

$("#button_cancel3").click(function(){
  $( ".hide3" ).hide();
});
/////AFFICHER BOUTON//////
$("#button_ajout4").click(function(){
  $( ".hide4" ).show();
});

$("#button_cancel4").click(function(){
  $( ".hide4" ).hide();
});
/////AFFICHER BOUTON//////
$("#button_ajout5").click(function(){
  $( ".hide5" ).show();
});

$("#button_cancel5").click(function(){
  $( ".hide5" ).hide();
});

//////SUPPRIMER////
$("#button_delete1").click(function(){
var valeurs = [];
$('input:checked[name="secteur[]"').each(function() {
  valeurs.push($(this).val());
});
var jsonString = JSON.stringify(valeurs);
alert(jsonString);

$.ajax({
      method:"POST",
      url:"index.php?page=ajout_trello&status=controler",
      data: {data : jsonString},
      cache: false,
      success: function(){
        //  window.location.href ="index.php?page=trello";
        alert("OK");
      }
      });
});


// for (i=0;i<valeurs.length;i++){
// alert(valeurs[i]);


//////AJOUTER////
// $("#button_add1").click(function(){
//   var titre = $("input[name=titre]").val();
//   var contenu = $("select[name=contenu]").val();
//
// $.ajax({
//       method:"POST",
//       url:"index.php?page=ajout_trello&status=controler",
//       data: "titre=" + titre +"&contenu=" +contenu ,
//       success: function(){
//         //  window.location.href ="index.php?page=trello";
//       }
//       });
// });
