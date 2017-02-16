<?php

echo "controler login";

$login=$_POST['admin_id'];
$pwd=$_POST['admin_mdp'];


if (isset($login) AND isset($pwd)){

  $reponse = $bdd->query('SELECT * FROM utilisateur');

  //// VERIFICATION LOGIN ET MDP/////
  while ($donnees = $reponse->fetch()){

    if($donnees['login']==$login){
        $verif_login=$donnees['login'];
    }

    if($donnees['password']==$pwd){
        $verif_pwd=$donnees['password'];
    }
  }



  if (($verif_login!=NULL) &&($verif_pwd!=NULL)){
    $_SESSION['status'] = "user";
    $_SESSION['name'] = $verif_login;

    $req = $bdd->prepare('SELECT id FROM utilisateur WHERE login = ?  AND password <= ? ');
    $req->execute(array($verif_login, $verif_pwd));
    while ($donnees = $req->fetch()){
      $_SESSION['user_id'] = $donnees['id'];
    }

    header('location:index.php?page=trello');
    exit();
   }
   else {
     header('location:index.php?page=index');
     exit();
   }
  }

else {
  echo "Veuillez rentrer des données valides";
  header('location:index.php?page=index');
  exit();
}


 ?>
