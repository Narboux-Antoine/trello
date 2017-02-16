<?php
// On écrase le tableau de session
$_SESSION = array();

// On détruit la session
session_destroy();
header('location:index.php?page=index');
 ?>
