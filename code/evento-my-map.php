<br>
      <div class="panel panel-info" >
      <div class="panel-heading" style="padding:0px 10px;border-bottom:0px">
      <form>
        <table border="0" width="100%">
          <tr>
            <td width="95%">
              <a href="index.php?avatar=<?php echo $row["id_usuario"] ?>">
                <img src="img/avatar/<?php echo $funciones->foto($row["id_usuario"]); ?>"
                width="30" class="img-circle" alt="Cinque Terre">
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
            <td width="80%">
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
            <td  width="50%" colspan="2">
              <p class="text-muted"><span class="glyphicon glyphicon-globe">:
              Running. </span></p>
            </td>
            <td  width="50%" colspan="2">
              <p class="text-muted"><span class="glyphicon glyphicon-map-marker">:
              Parque Ibirapuera. </span></p>
            </td>
          </tr>


            <tr>
              <td  width="80%" colspan="3">
                <p class="text-muted"><span class="glyphicon glyphicon-time">:
                21-nov-2018 (10:00-12:00). </span></p>
              </td>

              <td width="20%" colspan="1" valign="center" align="right">
                </td>
            </tr>

            <tr>
              <td  width="80%" colspan="3">
                <span class="glyphicon glyphicon-user">:</span>
                <?php
                  #echo $_SESSION["Usuario"]["id_usuario"];

                  $amigos = $funciones->list_usuario($_SESSION["Usuario"]["id_usuario"]);
                  #var_dump($amigos);
                  $i=0;
                  $random=rand(3,10);
                  while ($amigo=mysqli_fetch_array($amigos) and $i<$random)
                  {
                    $i+=1;
                  ?>
                    <img src='img/avatar/<?php echo $amigo["foto"]; ?>' width="15" class="img-circle" alt="Cinque Terre">
                  <?php
                  }
                ?>

                
                </td>
              <td width="20%" colspan="1" valign="center" align="right">

              </td>
            </tr>



            </table>
          </td>
          <td>
            <img width="200" src="img/maps.png"/>
          </td>
        </table>




      </form>
      </div>
      </div>
