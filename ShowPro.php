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

               <figure class="snip1423">
                 <img src="arm.jpg" height="300" width="200"/>
                 <figcaption>
                   <h3>
                   <?php
                      include ("connection.php");  
                      $qry = "SELECT * FROM `proTxt`";
                      $result = mysqli_query($conn, $qry);
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['proName'];
                      }
                   ?>
                   </h3>
                   <p>
                    <?php
                      include ("connection.php");  
                      
                      $result = mysqli_query($conn, "CALL `dispTxt`('T7_256')");
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['descTxt'];
                      }
                    ?>
                   </p>
                   <div class="price">
                     <s>$24K</s>$13.00
                   </div>
                 </figcaption><i class="ion-android-cart"></i>
                 <a href="pro1.php"></a>
               </figure>

               <figure class="snip1423">
                 <img src="arm2.jpg" height="300" width="200"/>
                 <figcaption>
                   <h3>
                     <?php
                        include ("connection.php");  
                        $qry = "SELECT * FROM `proTxt2`";
                        $result = mysqli_query($conn, $qry);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo $row['proName'];
                        }
                     ?>
                   </h3>
                   <p>
                    <?php
                      include ("connection.php");  
                      
                      $result = mysqli_query($conn, "CALL `dispTxt`('T7_938')");
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['descTxt'];
                      }
                    ?>
                   </p>
                   <div class="price">
                     <s>$1.00</s>$100.00
                   </div>
                 </figcaption><i class="ion-android-cart"></i>
                 <a href="pro2.php"></a>
               </figure>

               <figure class="snip1423">
                 <img src="exo.jpg" height="300" width="200"/>
                 <figcaption>
                   <h3>
                     <?php
                        include ("connection.php");  
                        $qry = "SELECT * FROM `proTxt3`";
                        $result = mysqli_query($conn, $qry);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo $row['proName'];
                        }
                     ?>
                   </h3>
                   <p>
                    <?php
                      include ("connection.php");  
                      
                      $result = mysqli_query($conn, "CALL `dispTxt`('E14_715')");
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['descTxt'];
                      }
                    ?>
                   </p>
                   <div class="price">
                     <s>$320.00</s>$9.00
                   </div>
                 </figcaption><i class="ion-android-cart"></i>
                 <a href="pro3.php"></a>
               </figure>

               <figure class="snip1423">
                 <img src="leg.jpg" height="300" width="200"/>
                 <figcaption>
                   <h3>
                     <?php
                        include ("connection.php");  
                        $qry = "SELECT * FROM `proTxt4`";
                        $result = mysqli_query($conn, $qry);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo $row['proName'];
                        }
                     ?>
                   </h3>
                   <p>
                    <?php
                      include ("connection.php");  
                      
                      $result = mysqli_query($conn, "CALL `dispTxt`('P9_28')");
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['descTxt'];
                      }
                    ?>
                   </p>
                   <div class="price">
                     <s>$100,000,000</s>$0.50
                   </div>
                 </figcaption><i class="ion-android-cart"></i>
                 <a href="pro4.php"></a>
               </figure>

               <figure class="snip1423">
                 <img src="legs.jpg" height="300" width="200"/>
                 <figcaption>
                   <h3>
                     <?php
                        include ("connection.php");  
                        $qry = "SELECT * FROM `proTxt5`";
                        $result = mysqli_query($conn, $qry);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo $row['proName'];
                        }
                     ?>
                   </h3>
                   <p>
                    <?php
                      include ("connection.php");  
                      
                      $result = mysqli_query($conn, "CALL `dispTxt`('P9_2800')");
                      while($row = mysqli_fetch_assoc($result))
                      {
                        echo $row['descTxt'];
                      }
                    ?>
                  </p>
                   <div class="price">
                     <s>$25.00</s>$25.00
                   </div>
                 </figcaption><i class="ion-android-cart"></i>
                 <a href="pro5.php"></a>
               </figure>

            </td>
         </tr>
      </table>
   </body>
</html>