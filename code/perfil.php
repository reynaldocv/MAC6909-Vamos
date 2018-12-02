<?php #session_start();
  #echo $_GET["avatar"];
  $funciones = new F_functions();
  require_once "includes/F_functions_other.php";
  $allhobbie_=$funciones->all_hobbie();

  #var_dump($allhobbie_);
  $datos=$funciones->get_usuario_hobbie($_SESSION["Usuario"]["email"]);
  #var_dump($datos);

?>
<div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class='panel-heading text-center panel-relative'>
                <img src="<?php echo $avatar; ?>" width="100" class="img-circle" alt="Cinque Terre">
                <br>

                <strong><?php echo $_SESSION['Usuario']["nombre"];



                 ?></strong>
                <br>
              </div>
            </div>
            <div class="panel-body">
              <div class="media">
              <div class="media-body">
               <?php echo $avatar_["descripcion"] ?>
              </div>
               <?php echo "Desc: : ".$data['desc']  ?>
              </div>
              <br>
              <ul class="list-group">

              <li class="list-group-item">
                <a href="index3.php">
                <i data-count="2" class="glyphicon glyphicon-queen notification-icon"> <?php echo "Running" ?></i>
                </a>
              </li>

              </li>
              <li class="list-group-item">
                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                <i data-count="2" class="glyphicon glyphicon-queen"> <?php echo $allhobbie_[$datos["h2"]] ?></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                <i data-count="2" class="glyphicon glyphicon-queen "> <?php echo $allhobbie_[$datos["h3"]] ?></i>
                </a>
              </li><li class="list-group-item">
                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                <i data-count="2" class="glyphicon glyphicon-queen "> <?php echo $allhobbie_[$datos["h4"]] ?></i>
                </a>
              </li>
              </ul>

              <?php #$ubicacion()["Isp"]; ?>

          </div>




        </div>
        </div>



     <div class="panel panel-primary">
      <div class="panel-heading">Amigos</div>
      <div class="panel-body">
        <?php
          #echo $_SESSION["Usuario"]["id_usuario"];

          $amigos = $funciones->list_usuario($_SESSION["Usuario"]["id_usuario"]);
          #var_dump($amigos);
          while ($amigo=mysqli_fetch_array($amigos))
          {
          ?>
            <img src='img/avatar/<?php echo $amigo["foto"]; ?>' width="20" class="img-circle" alt="Cinque Terre">
          <?php
          }
        ?>
      </div>
    </div>
