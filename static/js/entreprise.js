///////////CONTROLE FORMULAIRE SECTEUR ACTIVITE NON VIDE/////////
$('#form1').submit(function(e){
  var atLeastOneIsChecked = $('input[name="secteur[]"]:checked').length > 0;
  if (!atLeastOneIsChecked){
     alert("Veuillez sélectionner un secteur d'activité")
     return false;
  }
});

////////////MET EN MAJUSCULE RAISON SOCIALE//////////////
 $( "#raison_sociale" ).keyup(function() {
   var str = $('input[name=raison_sociale]').val();
   var str = str.toUpperCase();
   $(this).val(str);
});

////////////MET EN MAJUSCULE VILLE//////////////
$( "#ville" ).keyup(function() {
  var str = $('input[name=ville]').val();
  var str = str.toUpperCase();
  $(this).val(str);
});
