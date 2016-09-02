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
	
	<title>Ticket information</title>


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
	
	
	
	
	
	<img src="cinemalogo.jpg" alt="cinemalogo.jpg" height="170" width="300"/>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>



	
			<?php
				/* This code retrives all the information from the ticket table for that particular user */
		$sql = "SELECT * FROM tickets 
		WHERE id=".$_SESSION['id'];
		
				 $outcome = mysql_query($sql);
				 
			
				while ($row = mysql_fetch_array($outcome)) 
				{
					echo "<br/>";
					echo "<br/>";
					echo "<br/>";
					
					echo "Ticket ID: ".$row['ticketid'];
					echo "<br/>ID: ".$row['id'];
					echo "<br/>Screening ID: ".$row['screeningid'];
					echo "<br/>Seat ID: ".$row['seatid'];
					echo "<br/>";
					
					
				}
				
			?>
	
	<br>

	
	
	
</div>		
</body>
</html>
	