
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=trello;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();

// Vérification des pages
  if (empty(@$_GET['page'])){  // Pas non précisé
    $p = 'index';
  } else {
    $p = $_GET['page'];
  }

	$controler = FALSE;
  //Vérification controler
    if (!empty(@$_GET['status'])){  // Pas non précisé
        $controler = TRUE;
    }

	if($controler){
	include('controler/'.$p.".control.php");
} else {
	include('content/main.php');
}

?>
