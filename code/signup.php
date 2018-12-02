<?php
	session_start();
  require_once "includes/F_functions.php";
	#if (!isset($_SESSION['access_token'])) {
	#	header('Location: login.php');
	#	exit();
	#}

  $no=trim($_POST["nome"]);
  $so=trim($_POST["sobrenome"]);
  $se=$_POST["sexo"];
  $em=trim($_POST["email"]);
  $pa=$_POST["password"];
  echo $no." - ".$so." - ".$se." - ".$em." - ".$pa;
  if ($em and $no and $so and $pa)
  {
    $funciones = new F_functions();
    if ($funciones->existe_usuario_email($em))
    {
      $msg="Seu email já foi registrado!!!";
    }
    else
    {
      $funciones->registrar_usuario_($em,$no,$so,$se,$pa);
			#var_dump($funciones->perfil($em));
      $_SESSION["Usuario"]=$funciones->perfil($em);
      header('Location: signup2.php');
    	exit();
    }
  }
  else
    $msg="Registre todos seus Dados!!!";



  #if (!$funciones->existe_usuario($id_facebook)==True)
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vamos???</title>


<!-- Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap-notifications.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <br><br><br>
  <br><br><br>



<form method="POST">
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">

      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div  align="center">
            <a href="index.php"><img src="img/logo.jpeg"></a>
          </div>
        <div class="alert alert-success" align="center">

          <h4>Registre-se com apenas algumas perguntas:</h4>
        </div>
        <table width="100%" align="left">
          <tr>
            <td width="30%">
              <div class="form-group">
                <label for="email">Nome : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                  <input type="text" class="form-control" name="nome">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="email">Sobrenome : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                  <input type="text" class="form-control" name="sobrenome">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="email">Sexo : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" id="sexo" name="sexo">
                  <option value="X">...</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                  </select>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <label for="email">Fec. Nac. : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type='date' class="form-control" />
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <label for="email">E-mail : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                  <input type="email" class="form-control" name="email">
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <label for="email">Senha :</label>
              </div>
            </td>
            <td>
              <div class="form-group">
                  <input type="password" class="form-control" name="password">
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <div class="alert alert-danger" align="center">
                <?php echo $msg; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit" class="btn btn-success btn-block btn-lg">Criar Perfil</button>
            </td>
          </tr>

        </table>


      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
       </div>

    </div>
  </div>
</section>
</form>




<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyCompany. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>



</body>
</html>
