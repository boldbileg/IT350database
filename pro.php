<?php
	include ("connection.php");

	$proName = mysqli_real_escape_string($conn, $_POST['proName']);
	$stock = mysqli_real_escape_string($conn, $_POST['stock']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$specs = mysqli_real_escape_string($conn, $_POST['specs']);

	$sql = "INSERT INTO Products (specs, name, stock, price) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "ssss", $specs, $proName, $stock, $price);
		mysqli_stmt_execute($stmt);
	}
	header("Location:Products.php");
?>