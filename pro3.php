<?php
	session_start();

	$uname = $_SESSION["username"];
	$string = 'python cart.py E14_715 9.00 exo.jpg ' . $uname;
	$add_command = escapeshellcmd($string);
	$add = shell_exec($add_command);
	header("Location:ShowPro.php");
?>