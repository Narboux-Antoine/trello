<?php
$liste=$_POST['liste'];
$_SESSION['user_id'];

echo $liste;

$reponse = $bdd->query('SELECT * FROM liste');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
  if($donnees['titre']==$liste){
    $reponse->closeCursor(); // Termine le traitement de la requête
    header("location: index.php?page=trello");
    exit();
  }
}

$prep=$bdd->prepare('INSERT INTO liste (id, titre, id_user)
VALUES (NULL, :titre, :id_user)');
$prep->execute(array(
	'titre' => $liste,
  'id_user' => $_SESSION['user_id']
	));



  header('location:index.php?page=trello');
  exit();

 ?>
