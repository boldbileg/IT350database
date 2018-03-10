<?php
	include ("connection.php");

	$sql = "INSERT INTO DistLoc (DLname, address) VALUES (?, ?);";

	$distName = mysqli_real_escape_string($conn, $_POST['distName']);
	$custAddr = mysqli_real_escape_string($conn, $_POST['custAddr']);

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "ss", $distName, $custAddr);
		mysqli_stmt_execute($stmt);
	}
	header("Location:DistLoc.php");
?>