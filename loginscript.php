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

	if ($conn)
	{
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		$pass = sha1($pass);
		$qry = "SELECT Username, Password FROM Users WHERE Username='$uname' AND Password='$pass'";
		$result = mysqli_query($conn, $qry);
	    $count = mysqli_num_rows($result);

		if(!$qry)
		{
			die("Query Failed: ");
		}
		else
		{
			if($count == 1)
			{
				session_start();
				$_SESSION["loggedIn"] = TRUE;
				$_SESSION["username"] = $uname;
				mysqli_query($con, "UPDATE Users SET Logged_in=1 WHERE Username = '$uname'");
				header("Location:index.php");
			}
			else
			{
				header("Location:login.php");
			}
		}
	}
	 else
	 {
	 	print "Database NOT Found";
	 }
?>