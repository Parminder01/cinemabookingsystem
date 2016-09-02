<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <script type="text/css"> </script>

<link rel="stylesheet" type="text/css" href="Ssheet.css" title="style1"/>


<div id="wrapper">
	<div id="content">

</head>


<body>


<?php
	require('loginsystembar.php');
 	require('connect.php');
	echo "<br>";
?>


<br>


<title>Login</title>

<h1>Online cinema ticket booking system</h1>

 <ul>
 <li><a href="index.php">Homepage</a></li><li>		
 <a href="Chooseandbook.php">Choose & Book</a></li><li>
 <a href="Contactus.php">Contact us</a></li><li>
 <a href="aboutus.php">About Us</a></li><li>
  <a href="">Update</a>
  <ul>
 <li><a href="updatemovie.php">Update Movie</a></li><br>
 <li><a href="updateroom.php">Update Room</a></li><br>
 <li><a href="updatescreening.php">Update Screening</a></li><br>
 <li><a href="updateseat.php">Update Seat</a></li>
 </ul> 
 </li>
 </ul>



<?php
	
	
	if (isset($_POST['username']) 
    && isset($_POST['password']))

	{
		$username = "'".$_POST['username']."'";
		$sql = "SELECT id, password FROM users 
		WHERE username = ".$username;
		
		$outcome = mysql_query($sql);
		
		
		$row = mysql_fetch_array($outcome);
		
		$username = $_POST['username'];
		
		$password = md5($_POST['password']);
		
		/* If user does not enter anything in username or password then it will display please type in the fields below */
		if(empty($username) or empty($password)){
		echo "Fields Empty, please type in the fields below";
	}
		
		/* If the username and password is correct then log in, if password is not correct, or does not match username
		then, the user can not login and it will display that the password is not correct */
		else if (md5($_POST['password']) == $row['password']) 
		{
			$_SESSION['username'] = $_POST['username'];
			
			$_SESSION['id'] = $row['id'];
			
			header("location:login.php");
		}
		else
		{
			echo "Password is not correct";
		}
		echo "<br>";
		echo "<br>";
	
	}
	
	/* This code shows that when the log in is successful then, it will display a link,
	when the user clicks on it it will go to the about us page */
	if (isset($_SESSION['username'])) 
	{
		echo "You have successfully logged in<a href='aboutus.php'>Click here to go to about us page</a>";
		echo "<br>";
		die;
	}
	
		
?>



 
Please Log In
<form method="post" action="login.php">
<table border="1">
<tr>
<th> Username </th>
<td> <input type="text" name="username"> </td>
</tr>
<tr>
<th> Password </th>
<td> <input type="password" name="password"> </td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Log In">
</td>
</tr>
</table>
</form>


</div>		
</body>
</html>




