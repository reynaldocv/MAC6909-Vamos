<?php
  #echo "jaja_";
  require_once "includes/F_functions.php";
  #echo "jaja_";
  $funciones = new F_functions();

  #echo "jaja_";
  if (isset($_GET["avatar"]))
    $result = $funciones->list_evento_usuario($_GET["avatar"]);
  else
    $result = $funciones->list_evento_complement($_SESSION['usuario']["id_usuario"]);


  #echo "jaja_";
  #var_dump($lugar);


  #var_dump($result->num_rows);
  while ($row=mysqli_fetch_array($result))
  {
  ?>
    <br>
      <div class="panel panel-info" >
      <div class="panel-heading" style="padding:0px 10px;border-bottom:0px">
      <form>
        <table border="0" width="100%">
          <tr>
            <td width="95%">
              <a href="index.php?avatar=<?php echo $row["id_usuario"] ?>">
              <img src="img/avatar/<?php echo $funciones->foto($row["id_usuario"]); ?>" width="30" class="img-circle" alt="Cinque Terre">
                <?php echo $funciones->nombre_usuario($row["id_usuario"]); ?>
              </a>
              publicou um evento...
              </td>



            <td width="5%" align="center">
              <div class="btn-group">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                  </button>
                 <ul class="dropdown-menu" role="menu">
                  <li> <span class="glyphicon glyphicon-edit"> Editar</li>
                  <li> <span class="glyphicon glyphicon-trash"> Eliminar</span>     </li>
                </ul>
              </div>

            </td>


            </tr>
          </table>


      </form>
      </div>

      <div class="panel-body" style="padding:0px 10px;border-bottom:0px">
      <form>
        <table border="0" width="100%">

            <tr>

            <td width="6%" align="center">
            <span class="glyphicon glyphicon-comment"> </span>
            </td>
            <td>
                <?php echo $row["comentario"]; ?>
              </td>
            </tr>
          </table>
           <div style="line-height:150%;">
            <br>
          </div>
          <table border="0" width="100%">
            <tr>

              <td width="10%">
              </td>
              <td width="80%" align="left">
              <?php
               #echo <span class="glyphicon glyphicon-knight">:</span>
               #echo $hobbie[(string)$row["id_hobbie"]]
               #echo "em "
               #echo <span class="glyphicon glyphicon-map-marker">:</span>
               #echo $lugar[(string)$row["id_lugar"]]?>

              </td>
              <td  width="5%">

              <span class="glyphicon glyphicon-user">:</span>
              </td>
              <td width="5%" align="center">
              <span class="glyphicon glyphicon-calendar">:</span>
              </td>
              <td width="5%" align="center">
              <span class="glyphicon glyphicon-edit"></span>
              </td>
              <td width="5%" align="center">
              <span class="glyphicon glyphicon-trash"></span>
              </td>
              </tr>
          </table>


      </form>
      </div>
      </div>
  <?php
  }
?>
