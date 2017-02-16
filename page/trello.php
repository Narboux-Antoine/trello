<?php

echo "Bonjour ".$_SESSION['name'];
$_SESSION['user_id'];

?>
    <!--     AJOUT LISTE SUPPRESSION     -->
<div class="row" >
  <div class="large-3 columns ">
      <input class="button" id="button_add_liste" value="Ajouter liste">
  </div>
  <div class="large-3 columns end">
      <input class="button" id="button_supprim_liste" value="Supprimer liste">
  </div>
</div>
  <!--     CHAMP SUPPRESSION     -->
<div class="row" id="hideliste_sup"  >
  <form method="post" action="index.php?page=supprim_liste&status=controler">
    <div class="small-1 large-4 columns">
      <input type="text" name="liste" placeholder="Nom de la liste à supprimer">
    </div>
    <div class="large-1 columns ">
      <input type="submit" class="button" id="button_supprim_liste" value="Valider">
    </div>
  <div class="large-1 columns end">
    <input class="button" id="button_cancel_liste_supprim" value="Annuler">
  </div>
  </form>
</div>
  <!--     CHAMP AJOUT     -->
<div class="row" id="hideliste"  >
  <form method="post" action="index.php?page=ajout_liste&status=controler">
    <div class="small-1 large-4 columns">
      <input type="text" name="liste" placeholder="Votre Liste">
    </div>
    <div class="large-1 columns ">
      <input type="submit" class="button" id="button_add_liste" value="Valider">
    </div>
  <div class="large-1 columns end">
    <input class="button" id="button_cancel_liste" value="Annuler">
  </div>
  </form>
</div>


<div class="row">
<?php
$compt=0;
$req = $bdd->prepare('SELECT * FROM liste ');
 $req->execute();
 // WHERE id_user = ?
 // (array($_SESSION['user_id']))


while ($donnees = $req->fetch()){
  echo   '<div class="small-4 large-4 columns end">';
      echo '<fieldset class="fieldset">';
        echo '<legend>'.$donnees['titre'].'</legend>';
          //echo '<div class="row small-up-2">';

          $req2 = $bdd->prepare('SELECT * FROM carte WHERE id_liste = ? ');
          $req2->execute(array($donnees['id']));

          ////////CARTE//////
          while ($donnees2 = $req2->fetch()){
        //  echo  '<form id="form3" name="form" method="post" action="index.php?page=supprimer_trello&status=controler" >';
            echo '<div class="column column-block">';
            echo '<input id="secteur" value='.$donnees2['id'].' id="checksecteur" name="secteur[]" type="checkbox"><label for="checkbox">'.$donnees2['titre']."<br>".$donnees2['contenu'].'</label>';  // affichage
            //echo '</div>';
            echo '</div>';
            $string=$donnees2['id']+$compt;
            echo $string;
            echo '<p><a data-open='.$donnees2['id']'>Commentaires</a></p>';
            echo '<div class="tiny reveal" id='.$donnees2['id']' data-reveal>
              CouCOU
            </div> ';
            $compt++;
        }

        ?>

          <input type="submit" class="button" id="button_ajout<?php echo $donnees['id']; ?>" value="Ajouter une carte">

            <input type="submit" class="button" id="button_delete<?php echo $donnees['id']; ?>" value="Supprimer">
          <!-- </form> -->


              <!--     AJOUT CARTE     -->
<div class="hide<?php echo $donnees['id']; ?>">
  <form method="post" action="index.php?page=ajout_trello&status=controler">
      <div class="row">
        <div class="small-1 large-12 columns">
            <input type="text" name="titre" placeholder="Votre Titre">
        </div>
      </div>

        <div class="row">
        <div class="small-1 large-12 columns end">
            <input type="text" name="contenu" placeholder="Votre Contenu">
        </div>
        </div>
        <div class="row">
        <div class="small-1 large-12 columns end">
            <input type="hidden" name="id_liste" placeholder="Votre Contenu" value="<?php echo $donnees['id']; ?>">
        </div>
        </div>
        <div class="row" >
        <div class="large-3 columns ">
          <input type="submit" class="button" id="button_add<?php echo $donnees['id']; ?>" value="Valider">
          </form>
          </div>
          <div class="large-1 columns end">
          <input class="button" id="button_cancel<?php echo $donnees['id']; ?>" value="Annuler">
          </div>
        </div>
      </div>
</div>



    </fieldset>
    <?php
    }


?>

</div>


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="/trello/static/js/trello.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="/trello/static/js/admin.js"></script>
  <script src="/trello/static/js/vendor/jquery.js"></script>
  <script src="/trello/static/js/vendor/foundation.min.js"></script>
  <script src="/trello/static/js/vendor/what-input.js"></script>
  <script>
      $(document).foundation();
  </script>
<!-- <script>
$("#button_ajout").click(function(){
  var aaa = " <?php echo "Bonjour".$_SESSION['user_id'];  ?>";
  alert(aaa);
});
</script> -->
<script>
  $(document).ready(function() {
    $("#hideliste").hide();
      $("#hideliste_sup").hide();
    for(i=0;i<10;i++){
      $(".hide"+i).hide();
    }
   });
</script>
