
      <div class="panel panel-default" >
      <div class="panel-heading" style="padding:0px 10px;border-bottom:0px">
      <form>
        <table border="0" width="100%">
          <tr>
            <td width="100%">
              <a href="index.php?avatar=<?php echo $row["id_usuario"] ?>">

              <img src="img/avatar/<?php echo $funciones->foto($row["id_usuario"]); ?>"
              width="30" class="img-circle" alt="Cinque Terre">
                <?php echo $funciones->nombre_usuario($row["id_usuario"]); ?>
              </a>
              publicou um evento...
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
            <td  width="94%">
                <?php echo $row["comentario"]; ?>
            </td>
            </tr>
          </table>

          <table border="0" width="100%">
            <tr>
            <td width="80%" align="left">
            <?php
             #echo <span class="glyphicon glyphicon-knight">:</span>
             #echo $hobbie[(string)$row["id_hobbie"]]
             #echo "em "
             #echo <span class="glyphicon glyphicon-map-marker">:</span>
             #echo $lugar[(string)$row["id_lugar"]]?>

            </td>
            <td  width="5%" align="center" >

              <form action="#">
                <button type="submit" class="btn btn-success btn-sm">
                  <span class="glyphicon glyphicon-thumbs-up"> Vamos</span>
                </button>
              </form>
            </td>
            <td  width="5%" align="center"
              <form action="#">
                <button type="submit" class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-thumbs-down"> Não </span>
                </button>
              </form>
            </td>

            </tr>
          </table>


      </form>
      </div>
      </div>
