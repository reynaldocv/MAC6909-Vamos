<?php
  #echo "jaja_";
  require_once "includes/F_functions.php";
  #echo "jaja_";
  $funciones = new F_functions();

  #$result = $funciones->list_evento_complement($_SESSION['Usuario']["id_usuario"]);
  $result = $funciones->list_evento();

  #echo "jaja_";
  #var_dump($lugar);


  #var_dump($result->num_rows);
  while ($row=mysqli_fetch_array($result))
  {
      include("evento-my.php");
  }
?>
