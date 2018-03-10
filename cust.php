<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "nb576010746";
	$dbname = "biotech";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

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