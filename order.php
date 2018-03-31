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
                </br>
                <figure align="center">
                  <form action="/orderConf.php" method="post">
                    Customer Name: <input type="text" name="custName" required/><br/>
                    Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="custAddr" required/><br/>
                    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="custEmail" required/><br/>
                    Phone Number: &nbsp;&nbsp;<input type="text" name="custNum" required/><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Credit Card #: &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="custCC" required/>
                    <select name="Card" required>
                           <option value="default">Select one</option>
                           <option value="Visa">Visa</option>
                           <option value="Mastercard">Mastercard</option>
                           </select><br/>
                    Confirm: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="confCC" required/></br>
                    CVV Code: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="CVV" size="3" required/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </br>Exp Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="CVV" size="3" required/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" />
                  </form>
                </figure>
              
            </td>
         </tr>
      </table>
   </body>
</html>