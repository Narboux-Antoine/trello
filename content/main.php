<?php

if (  $_SESSION['status'] == "user"){
  include("header_deco.php");
}else {
  include("header.php");

}

if(empty(@$_SESSION['status'])){
  if ($p != "formulaire" && $p != "inscription"){
    $p = "index";
  }
}

include("../trello/page/".$p.".php");


?>
