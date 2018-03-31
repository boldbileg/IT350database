<?php
	session_start();

	$uname = $_SESSION["username"];
	$string = 'python cart.py P9_2800 25.00 legs.jpg ' . $uname;
	$add_command = escapeshellcmd($string);
	$add = shell_exec($add_command);
	header("Location:ShowPro.php");
?>