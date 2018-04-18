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
?>

<html>
   <style>
   a{
      color: blue; 
      background-color: transparent; 
      text-decoration: none;
   }

   table, th, td {
      border: 1px solid black;
   }
   </style>
   
   <head>
      <title>Backup</title>

      <style type="text/css">
         .btn {
           background: #3498db;
           background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
           background-image: -moz-linear-gradient(top, #3498db, #2980b9);
           background-image: -ms-linear-gradient(top, #3498db, #2980b9);
           background-image: -o-linear-gradient(top, #3498db, #2980b9);
           background-image: linear-gradient(to bottom, #3498db, #2980b9);
           -webkit-border-radius: 28;
           -moz-border-radius: 28;
           border-radius: 28px;
           font-family: Arial;
           color: #ffffff;
           font-size: 20px;
           padding: 10px 20px 10px 20px;
           text-decoration: none;
         }

         .btn:active {
           background: #3cb0fd;
           background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
           background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
           background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
           background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
           background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
           text-decoration: none;
         }
      </style>
   </head>

   <body>
      <table width = "100%" border = "0">
         <tr>
            <td colspan = "2" bgcolor = "#BED7FB">
               <p align="right">Welcome, <?php echo $uname?>! <a href="logout.php">Logout</a></p>
               <h1><a href="index.php"><font color="#3d85c6">Biotech</font> <font color ="#ff9900">Solutions</font></a></h1>
            </td>
         </tr>

         <tr valign = "top">
            <td bgcolor = "#AEAEB1" width = "10%">
               <b>Edit Database</b><br />
               <a href="Employees.php">Employees</a><br />
               <a href="Products.php">Products</a><br />
               <!-- <a href="Images.php">Images</a><br /> -->
               <a href="ProDesc.php">Product Description</a><br />
               <!-- <a href="ProRev.php">Product Reviews</a><br /> -->
               <a href="Customers.php">Customers</a><br />
               <a href="DistLoc.php">Distribution Locations</a><br />
               <!-- <a href="Orders.php">Orders</a><br /> --><br />

               <b>DBA Functions</b><br />
               <a href="Backup.php">Backup</a><br />
               <a href="Status.php">Status</a><br />
               <a href="Logs.php">Logs</a><br />
            </td>

            <td bgcolor = "#FFFFFF" width = "100" height = "200">
               <?php
                  $old_path = getcwd();
                  chdir('/var/www/');
                  $output = shell_exec('./display.sh');
                  echo $output;
                  chdir($old_path);
               ?>

               <center>
                  <br /><br /><br />
                  <a class="btn" href="backup.php">BACKUP</a>
               </center>
            </td>
         </tr>         
      </table>
   </body>

</html>