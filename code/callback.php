<?php
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
		$_SESSION['usuario'] = mysqli_fetch_array($result);	
		$_SESSION['name'] = $_SESSION['usuario']["nombre"]." ".$_SESSION['usuario']["apellidos"];	
			
		header('Location: index.php');
		exit();	
	}
	else
	{
		header('Location: login.php');
		exit();
	}
}
?>