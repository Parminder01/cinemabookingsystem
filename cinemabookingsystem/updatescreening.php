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


<title>Updatescreening</title>

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

	echo "<h2>Insert Screening</h2>";
	
	$submit = $_POST["submit"];
	
	$movieid = strip_tags($_POST["movieid"]);
	$roomid = strip_tags($_POST["roomid"]);
	$date = strip_tags($_POST["date"]);
	$start_time = strip_tags($_POST["start_time"]);
	$end_time = strip_tags($_POST["end_time"]);
	$price = strip_tags($_POST["price"]);
	
		
	
	
	if ($submit)
{
	
	if ($movieid&&$roomid&&$date&&$start_time&&$end_time&&$price)
	{
		
	
					
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("cinema_tbks");
					
					$queryreg = mysql_query("
					
					INSERT INTO screenings VALUES ('','$movieid','$roomid','$date','$start_time','$end_time','$price')
					
					
					");
					
					die("You have successfully inserted screening <a href='updatescreening.php'>Return to update screening page</a>");
				}
				
	else
		echo "Please fill in the details in the fields below";
}


?>

	
			
		
<form method="post" action="updatescreening.php">
<table border="0">
<tr>
<td> Movie id </td>
<td> <input type="text" name="movieid"<br/> </td>
</tr>
<tr>
<td> Room id </td>
<td> <input type="text" name="roomid"<br/> </td>
</tr>
<tr>
<td> Date </td>
<td> <input type="text" name="date"<br/> </td>
</tr>
<tr>
<td> Showing Time </td>
<td> <input type="time" name="start_time"<br/> </td>
</tr>
<tr>
<td> End Time </td>
<td> <input type="time" name="end_time"<br/> </td>
</tr>
<tr>
<td> Price </td>
<td> <input type="text" name="price"<br/> </td>
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
	