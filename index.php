<?php
session_start();

include ("connection.php");

//if not logged in redirect to login page
if($_SESSION["loggedIn"] != TRUE)
{
 header("Location:login.php");
}

$uname = $_SESSION["username"];
$qry = mysqli_query($conn, "SELECT Username, Email FROM Users WHERE Username='$uname'");
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
      <title>Home</title>
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
               <!-- <a href="Orders.php">Orders</a><br /> -->
            </td>

            <td bgcolor = "#FFFFFF" width = "100" height = "200">
               
            </td>
         </tr>         
      </table>
   </body>

</html>