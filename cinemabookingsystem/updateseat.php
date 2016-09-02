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


<title>Updateseat</title>

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

	echo "<h2>Insert Seat</h2>";
	
	$submit = $_POST["submit"];
	
	$screeningid = strip_tags($_POST["screeningid"]);
	$seat_no = strip_tags($_POST["seat_no"]);
	$status = strip_tags($_POST["status"]);
	
	
		
	
	
	if ($submit)
{
	
	if ($screeningid&&$seat_no&&$status)
	{
		
	
					
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("cinema_tbks");
					
					$queryreg = mysql_query("
					
					INSERT INTO seats VALUES ('','$screeningid','$seat_no','$status')
					
					
					");
					
					die("You have successfully inserted seat <a href='updateseat.php'>Return to update seat page</a>");
				}
				
	else
		echo "Please fill in the details in the fields below";
}

?>

	
			
		
<form method="post" action="updateseat.php">
<table border="0">
<tr>
<td> Screening id </td>
<td> <input type="text" name="screeningid"<br/> </td>
</tr>
<tr>
<td> Seat number </td>
<td> <input type="text" name="seat_no"<br/> </td>
</tr>
<tr>
<td> Status </td>
<td> <input type="text" name="status"<br/> </td>
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
		
	