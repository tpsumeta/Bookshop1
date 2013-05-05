<?php
      session_start();
	  echo "session ID is ".session_id()."<br>";
      if(isset($_POST['userid']) && isset($_POST['password']))
      {
         $userid = $_POST['userid'];
   		$password = $_POST['password'];
        if($userid=="admin" && $password=="1234")
		  {
		  	$_SESSION['valid_user'] = $userid;
		  }
      }
?>
<html>
<head>
</head>
<body>
<?php   
       if(isset($_SESSION['valid_user']))
		{
			echo " You aer Logger in as <b> ".$_SESSION['valid_user']."</b><br>";
			echo "<a href = 'logout.php'> Log out </a>";
     	}
		else
		{
			if(isset($userid))	
				{
					echo "Username or Password Incorrect.<br>";
				}
			else
  				{
					echo "Please login to system.<br>";
				}
?>
		<form method="post" action="login.php">
		<table>
		<tr>
				<td> Username:</td>
				<td><input type="text" name"userid"></td>
		</tr>
		<tr>
				<td>Password</td>
  				<td><input type="password" name"password"></td>
		</tr>
		<tr>
				<td collspan="2" align="center"><input type="submit" value="Log in"></br>
		</tr>
		</table>
		</form>
<?php
		}
?>
</body>
</html>