<?php
	session_start();

	$uname = $_SESSION["username"];
	$string = 'python cart.py P9_28 0.50 leg.jpg ' . $uname;
	$add_command = escapeshellcmd($string);
	$add = shell_exec($add_command);
	header("Location:ShowPro.php");
?>