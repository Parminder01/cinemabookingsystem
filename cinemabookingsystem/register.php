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
?>


<br>


<title>Register</title>

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
echo "<h2>Register</h2>";

$submit = $_POST["submit"];


$fullname = strip_tags($_POST["fullname"]);
$username = strip_tags($_POST["username"]);
$password = strip_tags($_POST["password"]);
$confirmpassword = strip_tags($_POST["confirmpassword"]);

if ($submit)
{
	
	if ($fullname&&$username&&$password&&$confirmpassword)
	{
		
		
		if ($password==$confirmpassword)
		{
			
			if (strlen($username)>30||strlen($fullname)>30)
			{
				echo "length of username or fullname is over 30 characters";
			}
			else
			{
				if (strlen($password)>30||strlen($password)<7)
				{
					echo "The password must be between 7 and 25 characters";
				}
				else
				{
					$password = md5($password);
					$confirmpassword = md5($confirmpassword);
					
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("cinema_tbks");
					
					$queryreg = mysql_query("
					
					INSERT INTO users VALUES ('','$fullname','$username','$password')
					
					
					");
					
					die("You have successfully registered <a href='login.php'>Go to login page, to login</a>");
				}
			}
		}
		
		else
			echo "Passwords do not match";
		
	}
	else
		echo "Please fill in the details in the fields below";
}

?>








<form method="post" action="register.php">
<table>
<table border="1">
<tr>
<td>
Full Name:
</td>
<td>
<input type="text" name="fullname" value='<?php echo $fullname; ?>'
</td>
</tr>
<tr>
<td>
Username:
</td>
<td>
<input type="text" name="username" value='<?php echo $username; ?>'
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" name="password">
</td>
</tr>
<tr>
<td>
Confirm Password:
</td>
<td>
<input type="password" name="confirmpassword">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Register">
</td>
</tr>
</table>

</form>



</div>		
</body>
</html>