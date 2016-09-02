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


<title>Contactus</title>

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
 
 

<h2>Contact us</h2>



<p>Name: Parminder Phull<p/>
<p>Email: p13235037@myemail.dmu.ac.uk<p/>
  
  




Please write you message here:
<form method="post" action="contactedsuccess.php">
<table border="1">
<tr>
<th> Full name </th>
<td> <input type="text" name="name"> </td>
</tr>
<tr>
<th> Email address</th>
<td> <input type="text" name="email"> </td>
</tr>
<tr>
<th> Message</th>
<td> <textarea name="message" cols='20' rows ='15'></textarea> </td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>


</div>		
</body>
</html>	



