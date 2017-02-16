<?php
// $supprim=$_POST["value_sup"];
// echo $supprim;

$data = json_decode(stripslashes($_POST['data']));

  // here i would like use foreach:

  foreach($data as $d){
     echo $d;
  }
  header("location: index.php?page=formulaire"); //redirection sur index.php
  exit();
// $check = "-";
// foreach($_POST["secteur"] as $checkoptions){
// $check .= $checkoptions."-";
// }
// echo $check;
?>
