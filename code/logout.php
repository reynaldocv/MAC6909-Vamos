<?php
	session_start();

	session_unset($_SESSION["access-token"]);
	session_unset($_SESSION["name"]);
	header('Location: login.php');
	exit();
?>
