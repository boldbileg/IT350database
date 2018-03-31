<?php
	session_start();

	$uname = $_SESSION["username"];
	$string = 'python cart.py T7_938 100.00 arm2.jpg ' . $uname;
	$add_command = escapeshellcmd($string);
	$add = shell_exec($add_command);
	header("Location:ShowPro.php");
?>