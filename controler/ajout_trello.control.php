<?php
$titre=$_POST['titre'];
$contenu=$_POST['contenu'];
$id_liste=$_POST['id_liste'];

// echo $titre;
// echo "<br>".$contenu;
// echo "<br>".$id_liste;

////INSERTION CARTE DANS LA BDD////
$prep=$bdd->prepare('INSERT INTO carte (id, titre, contenu, id_liste)
VALUES (NULL, :titre, :contenu, :id_liste)');
$prep->execute(array(
	'titre' => $titre,
	'contenu' => $contenu,
  'id_liste' => $id_liste
	));



  header('location:index.php?page=trello');
  exit();


 ?>
