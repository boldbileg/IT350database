<?php
	session_start();

	include ("connection.php");

	//if not logged in redirect to login page
	if($_SESSION["loggedIn"] != TRUE)
	{
	header("Location:login.php");
	}

	$uname = $_SESSION["username"];
	$qry = mysqli_query($conn, "SELECT Username FROM Users WHERE Username='$uname'");
	$row = mysqli_fetch_array($qry);

	//delete cart items
	$string = 'python delete.py ' . $uname;
	$rmv_command = escapeshellcmd($string);
	$rmv = shell_exec($rmv_command);
?>

<html>
   <head>
      <title>Prosthetics</title>
      <link rel="stylesheet" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>

   <style> 
      a{
        text-decoration: none !important;
      }
      h1{
        font-size: 2.5em;
      }
    </style>

   <body>
      <table width = "100%" border = "0">
         <tr>
            <td colspan = "2" bgcolor = "#BED7FB">
               <p align="right">
                  <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                   Welcome, <?php echo $uname?>! 
                   <a href="logout.php">Logout</a>
                </p>
               <h1>
                  <a href="user.php">
                  <font color="#3d85c6">Biotech</font> <font color ="#ff9900">Solutions</font>
                  </a></br></br>
               </h1>
            </td>
         </tr>

         <tr valign = "top">
            <td bgcolor = "#AEAEB1" width = "10%">
               <b>Products</b><br />
               <a href="ShowPro.php">Neuroprosthetics</a><br />
            </td>

            <td bgcolor = "#FFFFFF" width = "100" height = "200">
            	</br><h1>Thank you for your order!</h1>
            	<h3>
            		Order number is: 
	            	<?php
						echo(rand(100000,99999999));
					?>
            	</h3>
            	<p>You will NOT receive and email confirmation so you better print this page or else your package will be set on fire. Seriously.</p>
            </td>
         </tr>
      </table>
   </body>
</html>