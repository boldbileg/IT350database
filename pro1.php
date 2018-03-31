<?php
	session_start();

	$uname = $_SESSION["username"];
	$string = 'python cart.py T7_256 13.00 arm.jpg ' . $uname;
	$add_command = escapeshellcmd($string);
	$add = shell_exec($add_command);
	header("Location:ShowPro.php");
?>