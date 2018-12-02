<?php
	if (isset($_SESSION['usuario'])) {
		header('Location: index.php');
		exit();
	}

	if ($_POST["email"] && $_POST["pass"])
	{

		echo "callback";
		require_once "includes/F_functions.php";
		$funciones = new F_functions();

		$result = $funciones->login($_POST["email"],$_POST["pass"]);
		echo $result->num_rows;
		if ($result->num_rows)
		{
			session_start();
			$_SESSION['Usuario'] = mysqli_fetch_array($result);
			header('Location: index.php');
			exit();
		}
		else
		{
			#header('Location: login.php');
			#exit();
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blabbed</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="/image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-30">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-5">
						<img src="img/logo.jpeg">
					</span>
					<div>
						<a href="javascript:void(null);" class="btn-login-with bg1 m-b-5" onclick="window.location = '<?php echo $loginURL ?>';">

							<i class="fa fa-facebook-official"></i>
							Login with Facebook
						</a>
					</div>

					<div class="text-center p-t-20 p-b-20">
						<span class="txt1">
							Login with email
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-5" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-5" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">


						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="flex-col-c p-t-50">

						<span class="txt2 p-b-10">
							Don’t have an account?
						</span>

						<a href="signup.php" class="txt3 bo1 hov1">
							Sign up now
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
