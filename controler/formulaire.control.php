<?php

$nom=$_POST['login'];
$pwd=$_POST['password'];

echo $nom."<br>";
echo $pwd."<br>";

$reponse = $bdd->query('SELECT * FROM utilisateur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
  if($donnees['login']==$nom){
    $reponse->closeCursor(); // Termine le traitement de la requête
    header("location: index.php?page=formulaire");
    exit();
  }
}


$prep=$bdd->prepare('INSERT INTO utilisateur (id, login, password) VALUES (NULL, :login, :password)');
$prep->execute(array(
	'login' => $nom,
	'password' => $pwd
	));



header("location:index.php?page=index");
exit();



 ?>
