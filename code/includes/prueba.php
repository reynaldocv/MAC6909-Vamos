<?php
  require_once "config.php";
  $con=mysqli_connect(HOST,USER,PASS);
  if(!$con)
  {
    echo "could not connect" ;
  }
  else
  {
    echo "connected";
  }
?>
