


    <br>
      <div class="panel panel-primary">

      <div class="panel-body">


      <form action="eventos-add.php" method="POST">
        <table border="0" width="100%">
          <tr>
            <td width="8%">
            <img src="img/avatar/avatar.jpg" width="38" class="img-circle" alt="Cinque Terre">::
            </td>
            <td width="5%" align="center">
            <span class="glyphicon glyphicon-knight">:</span>
            </td>
            <td  width="26%">
                <input type="hidden" class="form-control " name="usuario" value="<?php echo $_SESSION["usuario"]["id_usuario"]; ?>">
                <input type="text" class="form-control " name="hobbie">
            </td>
            <td width="5%" align="center">
            <span class="glyphicon glyphicon-map-marker">:</span>
            </td>
            <td  width="26%">
                <input type="text" class="form-control " name="lugar">
            </td>
            <td width="5%" align="center">
            <span class="glyphicon glyphicon-calendar">:</span>
            </td>
            <td  width="26%">
                <input type="text" class="form-control " name="data_evento">
            </td>
            </tr>

            <tr>
            <td>

            </td>
            <td width="5%" align="center">
            <span class="glyphicon glyphicon-comment">:</span>
            </td>
            <td  colspan="5">
                <input type="text" class="form-control " name="comentario">
              </td>
            </tr>
          </table>
          <div style="line-height:50%;">
            <br>
          </div>
          <table border="0" width="100%">
            <tr>
            <td width="80%">
            </td>
            <td width="20%" align="center">
               <button type="submit" class="btn btn-primary btn-sm">
                  <span class="glyphicon glyphicon-globe"></span>
                  Publicar
                </button>
            </td>
            </tr>
          </table>

      </form>










      </div>
      </div>
