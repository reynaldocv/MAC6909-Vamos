


    <br>
      <div class="panel panel-primary" style="padding:0px 0px 2px 0px">

      <div class="panel-body" style="padding:10px 10px 0px 10px "s>


      <form action="eventos-add.php" method="POST">
        <table border="0" width="100%">
          <tr>
            <td width="8%">
            <img src="<?php echo $avatar; ?>" width="38" class="img-circle" alt="Cinque Terre">
            </td>
            <td width="82%" align="center">
                <textarea class="form-control" maxlength="200" rows="3" name="comentario">


                </textarea>


              </td>
            </tr>
          </table>
          <div style="line-height:50%;">
            <br>
          </div>
          <table border="0" width="100%">
            <tr>
            <td width="90%">
            </td>
            <td width="10%" align="center">
                <input type="hidden" class="form-control " name="usuario" value="<?php echo $_SESSION["Usuario"]["id_usuario"]; ?>">

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
