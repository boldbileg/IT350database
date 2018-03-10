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

//If the database is found, then this inserts values from the form.html
//into the database, otherwise it prints "Database NOT Found
if ($conn)
{
 	session_start();
 	$uname = $_SESSION["username"];
 	$qry = mysqli_query($conn, "SELECT * FROM Users WHERE Username='$uname'");
 	if ($_SESSION["loggedIn"] == TRUE)
 	{
 		session_unset();
		session_destroy();
		mysqli_query($con, "UPDATE Users SET Logged_in=0 WHERE Username='$uname'");
		header("Location:login.php");
 	}
}
else
{
 	print "Database NOT Found";
}

mysqli_close($con);
?>