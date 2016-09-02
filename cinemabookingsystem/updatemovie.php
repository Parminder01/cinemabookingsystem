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


<title>Updatemovie</title>

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

	echo "<h2>Insert Movie</h2>";
	
	$submit = $_POST["submit"];
	
	$title = strip_tags($_POST["title"]);
	$genre = strip_tags($_POST["genre"]);
	$runtime = strip_tags($_POST["runtime"]);
	
	if ($submit)
{
	
	if ($title&&$genre&&$runtime)
	{
		
	
					
					$connect = mysql_connect("localhost","root","");
					mysql_select_db("cinema_tbks");
					
					$queryreg = mysql_query("
					
					INSERT INTO movies VALUES ('','$title','$genre','$runtime')
					
					
					");
					
					die("You have successfully inserted movie <a href='updatemovie.php'>Return to Update Movie page</a>");
				}
				
	else
		echo "Please fill in the details in the fields below";
}
	
?>

	
			
		
<form method="post" action="updatemovie.php">
<table border="0">
<tr>
<td> Title </td>
<td> <input type="text" name="title"<br/> </td>
</tr>
<tr>
<td> Genre </td>
<td> <input type="text" name="genre"<br/> </td>
</tr>
<tr>
<td> Runtime </td>
<td> <input type="text" name="runtime"<br/> </td>
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
	