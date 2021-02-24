<?php 
  require_once "./system/functions.php";
  require_once "./system/config.php";
  
  if($maintenance==1)
  {
    echo "Die Seite ist in Bearbeitung!";
  }
  else
  { 
    getPage();
  }
?>