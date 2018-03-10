<?php
	$servername = "127.0.0.1";
	$username = "phpmyadmin";
	$password = "nb576010";
	$dbname = "biotech";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

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