<?php
	include ("connection.php");

	$proName = mysqli_real_escape_string($conn, $_POST['proName']);
	$descTxt = mysqli_real_escape_string($conn, $_POST['descTxt']);
	$descDate = mysqli_real_escape_string($conn, $_POST['descDate']);
	

	$sql = "INSERT INTO Descriptions (proName, descTxt, descDate) VALUES (?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "sss", $proName, $descTxt, $descDate);
		mysqli_stmt_execute($stmt);
	}
	header("Location:ProDesc.php");
?>