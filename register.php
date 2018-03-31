<?php
	include ("connection.php");

	if ($conn)
	{
		//retrieves post data
		$uname = mysqli_real_escape_string($conn, $_POST['usernameNew']);
		$pass = mysqli_real_escape_string($conn, $_POST['passwordNew']);
		$confPass = mysqli_real_escape_string($conn, $_POST['confirm']);

		//checks 
		$qry = "SELECT Username FROM Users WHERE Username = '$uname'";
		$result = mysqli_query($conn, $qry);
		$row = mysqli_fetch_array($result);
		$taken = false;

		//checks if username is taken
		if ($result->num_rows > 0)
		{
			$taken = true;
		}
		else
		{
			$taken = false;
		}

		//checks if password is wrong
		if ($pass == $confPass)
		{
			$wrongPass = false;
		}
		else
		{
			$wrongPass = true;
		}

		//if everything is correct add to database
		if ($taken == false && $wrongPass == false)
		{
			$qry = mysqli_query($conn, "SELECT * FROM Users");
			if (!$qry)
			{
				die("Query Failed: ");
			}
			else
			{
				mysqli_query($conn, "INSERT INTO Users (Username, Password,
				Logged_in) VALUES ('$uname', SHA1('$pass'), 0)");
				session_start();
				$_SESSION["username"] = $uname;
				$_SESSION["loggedIn"] = TRUE;
				mysqli_query($conn, "UPDATE Users SET Logged_in=1 WHERE Username =
				'$uname'");
				header("Location:user.php");
			}
		}

		//error messages
		if ($taken)
		{
			echo "That username is taken" . "<br>";
		}
		if ($wrongPass)
		{
			echo "passwords must match" . "<br>";
		}
	}
	else
	{
		print "Database NOT Found";
	}

	mysqli_close($conn);
?>