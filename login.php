<!DOCTYPE html>
<html>
	<style>
	a{
		color: blue; 
		background-color: transparent; 
		text-decoration: none;
	}
	</style>
	
   <head>
      <title>Home</title>
   </head>

   <body>
      <table width = "100%" border = "0">
         <center><form action="loginscript.php" method="post">
         Username: <input type="text" name="username" /><br/>
         Password: <input type="password" name="password" /><br/>
         <input type="submit" />
         </form></center>
      </table>

      <p align="center">Not a member? <a href="signup.php">Create Account</a></p>
   </body>

</html>