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


<title>Homepage</title>

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




<h3>Welcome to the online cinema booking system</h3>

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



<form method="post" action="register.php">
<input type="submit" value="Register">
</form>




<script>
var img = new Array(2);
img[0] = new Image();
img[0].src= "Casino Royal.jpg";
img[1] = new Image();
img[1].src= "Avatar.jpg";
img[2] = new Image();
img[2].src= "Hot Fuzz.jpg";

var number = 0;

function next()
{
	number++;
	if(number > 2)
	{
		number = 0;
	}
document.slider.src = img[number].src;
}
function previous()
{
	number--;
	if(number < 0)
	{
		number = 2;
	}
	document.slider.src = img[number].src;
}
</script>

<br/>

<img src="Casino Royal.jpg" name="slider" width="600" height="350"/>
<form name ="form">
	<input type="button" value="<" onClick="previous();">
	<input type="button" value=">" onClick="next();">
	</form>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


</div>		
</body>
</html>






