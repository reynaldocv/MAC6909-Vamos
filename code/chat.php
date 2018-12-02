<br>


<?php
  #echo "jaja_";
  require_once "includes/F_functions.php";
  #echo "jaja_";
  $funciones = new F_functions();

  #$result = $funciones->list_evento_complement($_SESSION['Usuario']["id_usuario"]);
  $result = $funciones->list_eventos();

  #echo "jaja_";
  #var_dump($lugar);


  #var_dump($result->num_rows);
  $i=0;
  $random=rand(0,10);
  while ($row=mysqli_fetch_array($result))
  {
    if ($i==$random)
    {
      include("evento-my-map.php");
    }
    $i+=1;

  }
  include("chatb.php")
?>
