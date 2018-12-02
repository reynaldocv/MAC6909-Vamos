<?php
	session_start();
  require_once "includes/F_functions.php";
	$funciones = new F_functions();
	if (!isset($_SESSION['Usuario'])) {
		header('Location: login.php');
		exit();
	}
  var_dump($_SESSION["Usuario"]);
	#echo $_SESSION["Usuario"]["nombre"];
	$hobbies=$funciones->hobbie();
	$hobbies_=$funciones->hobbie_();

	$de=$_POST["desc"];
  $h1=$_POST["hobbie1"];
  $h2=$_POST["hobbie2"];
  $h3=$_POST["hobbie3"];
  $h4=$_POST["hobbie4"];

	if ($de and $h1 and $h2 and $h3 and $h4)
  {
		echo $de." ".$h1." ".$h2." ".$h3." ".$h4;
		$em=$_SESSION["Usuario"]["email"];
		$pa=$_SESSION["Usuario"]["password"];

		echo $em;
		echo $pa;
		$funciones->registrar_usuario_hobbie($em,$desc,$h1,$h2,$h3,$h4);

		$result = $funciones->login($em,$pa);
		echo $result->num_rows;
		if ($result->num_rows)
		{
			session_start();
			$_SESSION['Usuario'] = mysqli_fetch_array($result);
			header('Location: index.php');
			exit();
		}




		header('Location: index.php');
		exit();
	}
	#echo "<br>";
	#var_dump($hobbies);




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

          <h4>Bemvind@ :<?php echo $_SESSION["Usuario"]["nombre"]; ?></h4>
        </div>
        <table width="100%" align="left">
          <tr>
            <td colspan="2">
              <div class="form-group">
                <label for="email">Se descreva : </label>
              </div>
            </td>
					</tr>
					<tr>
            <td colspan="2">
							<div class="form-group">
  							<textarea class="form-control" rows="4" name="desc"></textarea>
							</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="form-group">
                <label for="email"> Que esportes vc pratica o gostaria praticar: </label>
              </div>
            </td>

          </tr>
          <tr>
						<td width="10%">
						</td>
						<td width="90%">
							<div class="form-group">
								<select class="form-control" id="sexo" name="hobbie1">
									<option value="0">...</option>
									<?php
									foreach ($hobbies as $a => $v) {
									?>
									<option value="<?php echo $a ?>"><?php  echo $v; ?></option>
									<?php
									}
									?>
									</select>
							</div>
						</td></tr>
					<tr>
						<td width="10%">
						</td>
						<td width="90%">
							<div class="form-group">
								<select class="form-control" id="sexo" name="hobbie2">
									<option value="0">...</option>
									<?php
									foreach ($hobbies as $a => $v) {
									?>
									<option value="<?php echo $a ?>"><?php  echo $v; ?></option>
									<?php
									}
									?>
									</select>
							</div>
						</td>
					</tr>
					<tr>
            <td colspan="2">
              <div class="form-group">
                <label for="email"> O que vc faz no seu tempo livre? </label>
              </div>
            </td>

          </tr>
          <tr>
						<td width="10%">
						</td>
						<td width="90%">
							<div class="form-group">
								<select class="form-control" id="sexo" name="hobbie3">
									<option value="0">...</option>
									<?php
									foreach ($hobbies_ as $a => $v) {
									?>
									<option value="<?php echo $a ?>"><?php  echo $v; ?></option>
									<?php
									}
									?>
									</select>
							</div>
						</td>
          </tr>
					<tr>
						<td width="10%">
						</td>
						<td width="90%">
							<div class="form-group">
								<select class="form-control" id="sexo" name="hobbie4">
									<option value="0">...</option>

									<?php
									foreach ($hobbies_ as $a => $v) {
									?>
									<option value="<?php echo $a ?>"><?php  echo $v; ?></option>
									<?php
									}
									?>
									</select>
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
