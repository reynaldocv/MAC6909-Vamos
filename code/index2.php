<?php
	session_start();
  require_once "includes/F_functions.php";
	if (!isset($_SESSION['Usuario'])) {
		header('Location: login.php');
		exit();
	}
	$funciones = new F_functions();
	$em=$_SESSION["Usuario"]["email"];
  echo $funciones->existe_usuario_email($em);
	$avatar="img/avatar/". $_SESSION["Usuario"]["foto"];
  #if (!$funciones->existe_usuario($id_facebook)==True)
  {
    #$id_facebook=$_SESSION['userData']['id'];
    #$nombre=$_SESSION['userData']['name'];
    #$apellidos=$_SESSION['userData']['last_name'];
    #$email=$_SESSION['userData']['email'];
    #$sexo=$_SESSION['userData']['gender'];
    #$foto=$_SESSION['userData']['picture']['url'];
    #echo $id_facebook,$nombre,$apellidos,$email,$sexo,$foto;
    #$funciones->registrar_usuario($id_facebook,$email,$nombre,$apellidos,$sexo,$foto);
  }
  #else
  {





  }
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
<?php include("menu.php"); ?>
<br><br><br>



<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
         <?php include("perfil.php"); ?>

      </div>

      <div class="col-lg-6 col-md-4 col-sm-6">



				<?php include("categorias.php"); ?>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">

       <?php include("publicidad.php"); ?>
      </div>

    </div>
  </div>
</section>





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
