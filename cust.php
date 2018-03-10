<?php
	include ("connection.php");

	$sql = "INSERT INTO Customers (name, age, address, email, gender, phoneNum, insurance) VALUES (?, ?, ?, ?, ?, ?, ?);";

	$custName = mysqli_real_escape_string($conn, $_POST['custName']);
	$custAge = mysqli_real_escape_string($conn, $_POST['custAge']);
	$custAddr = mysqli_real_escape_string($conn, $_POST['custAddr']);
	$custEmail = mysqli_real_escape_string($conn, $_POST['custEmail']);
	$custNum = mysqli_real_escape_string($conn, $_POST['custNum']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$custIns = mysqli_real_escape_string($conn, $_POST['custIns']);

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "sssssss", $custName, $custAge, $custAddr, $custEmail, $gender, $custNum, $custIns);
		mysqli_stmt_execute($stmt);
	}
	header("Location:Customers.php");
?>