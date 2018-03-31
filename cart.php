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
   <head>
      <title>Prosthetics</title>
      <link rel="stylesheet" href="checkout.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>

   <style> 
      a{
        text-decoration: none !important;
      }
      table, th, td {
          border: 1px solid black;
      }
      h1{
          font-size: 2.5em;
      }
      td { 
          padding-left: 12px;
          padding-right: 12px;
          padding-top: 0px;
          padding-bottom: 0px;
      }
      img {
        padding-right: 20px;
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
              </br></br>
              <table align="center">
                <tr>
                  <th>Item</th>
                  <th>Price</th>
                </tr>

                <?php
                  $string = 'python show.py ' . $uname;
                  $show_command = escapeshellcmd($string);
                  $show = shell_exec($show_command);
                  echo $show;
                
                  // echo "<tr>";
                  // echo "<th>Total</th>";
                  // $string = 'python sum.py';
                  // $show_command = escapeshellcmd($string);
                  // $show = shell_exec($show_command);
                  // echo $show;
                  // echo "</tr>";
                ?>
               </table>

              <center>
                <a href="order.php" class="checkout">Checkout</a>
              </center>
            </td>
         </tr>
      </table>
   </body>
</html>