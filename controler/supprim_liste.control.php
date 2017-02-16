<?php
$liste=$_POST['liste'];
$_SESSION['user_id'];



$reponse = $bdd->prepare('SELECT * FROM liste WHERE titre = ?');  //recherche du titre
$reponse->execute(array($liste));

while ($donnees = $reponse->fetch()){
  if($donnees['titre']==$liste){
    if ($donnees['id_user'] == $_SESSION['user_id']) {  //verification id de l'utilisateur
      $reponse = $bdd->prepare('DELETE FROM `trello`.`liste` WHERE `liste`.`titre` = ? ');  //suppression
      $reponse->execute(array($liste));
    }
  }
}

  header('location:index.php?page=trello');
  exit();

 ?>
