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
	
?>


<br>


<title>Updateroom</title>

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

if (!isset($_SESSION['username']) || $_SESSION['username'] != 'administrator') 
	{
		echo "<p>Please log in as an administrator to access this page</p>";
		die;
	}

	echo "<h2>Insert Room</h2>";
	
	$submit = $_POST["submit"];
	
	$no_of_seats = strip_tags($_POST["no_of_seats"]);
	
	if ($submit)
{
	
	if ($no_of_seats)
	{
		
	
					
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("cinema_tbks");
					
					$queryreg = mysql_query("
					
					INSERT INTO rooms VALUES ('','$no_of_seats')
					
					
					");
					
					die("You have successfully inserted number of seats and available room <a href='updateroom.php'>Return to Update Room page</a>");
				}
				
	else
		echo "Please fill in the details in the fields below";
}

?>
			
		
<form method="post" action="updateroom.php">
<table border="0">
<tr>
<td> Number of seats </td>
<td> <input type="text" name="no_of_seats"<br/> </td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Insert">
</td>
</tr>
</table>
</form>



</div>		
</body>
</html>	
			