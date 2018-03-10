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

	$empName = mysqli_real_escape_string($conn, $_POST['empName']);
	$empAge = mysqli_real_escape_string($conn, $_POST['empAge']);
	$role = mysqli_real_escape_string($conn, $_POST['role']);

	$sql = "INSERT INTO Employees (name, age, role) VALUES (?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL failed";
	}
	else
	{
		mysqli_stmt_bind_param($stmt, "sss", $empName, $empAge, $role);
		mysqli_stmt_execute($stmt);
	} 
	header("Location:Employees.php");
?>