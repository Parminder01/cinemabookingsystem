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
	<title>Seat</title>


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
 	if (isset($_POST['screeningid']))  
 	{ 
 		
 		$screeningid = $_POST['screeningid']; 
		
 		$_SESSION['screeningid'] = $_POST['screeningid']; 
		
		/* Retreive all the databse information from the seats table for the particular screening id that was selected */ 
 		$sql = "SELECT * FROM seats 
		WHERE screeningid=".$screeningid." 
		ORDER BY seat_no asc;"; 
 		
 		 
 	} 
  
 	
 	if (isset($_GET['seat_no']))  
 	{ 
 		
 		 
 		$sql = "SELECT * FROM seats 
		WHERE screeningid=".$_SESSION['screeningid']." 
		AND seat_no=".$_GET['seat_no'];
		
 		$outcome = mysql_query($sql); 
 		
 		if ($row = mysql_fetch_array($outcome))  
 		{ 
 			if ($row['status'] =='available')  
 			{ 
 				$_SESSION['seatid'] = $row['seatid']; 
 			} 
 			else 
 			{ 
				echo "<br>";
				echo "<br>";
			/* This code shows a clickable link to the user which allows the user to go back to the seat page to choose seat again */
 				echo "You have failed to book ticket, as seat was already taken<a href='seat.php'>Click here to choose another seat</a>"; 
 				die; 
 			} 
 		} 
 		
		/* When user successfully chooses seated, it changes the available status of the seat to not available */
 		$sql = "UPDATE seats SET status= 'not available' 
		WHERE screeningid=".$_SESSION['screeningid']." 
		AND seat_no=".$_GET['seat_no']; 
 		
		$outcome = mysql_query($sql); 
 		
 		
		echo "Thank you, you have successfully booked your ticket<a href='ticketinfo.php'>Click here to view your ticket information</a>";
		
		
 		
 		$id = $_SESSION['id']; 
		
		$screeningid = $_SESSION['screeningid']; 
		
		$seatid = $_SESSION['seatid']; 
 		 
		
		
		
		/* Insert the details into the tickets table */
 		$sql = "INSERT INTO tickets(id, screeningid, seatid) VALUES 
 					($id, $screeningid, $seatid)"; 
					
 		$outcome = mysql_query($sql); 
 		
 		die; 
 	 } 
 
 ?>
 
 
 
		
 		<form action="" method="get"> 
 			Please select the seat number:
				<input type="text" name="seat_no" value="">
 			
 			<input type="submit" value="Confirm tickets"> 
 		</form> 
 
 
 <h2>View seating layout below:</h2>
 
 <table> 
	<tr>
	<td width="50">1</td>
	<td width="50">2</td>
	<td width="50">3</td>
	<td width="50">4</td>
	<td width="50">5</td>
	</tr>
	<td>6</td>
	<td>7</td>
	<td>8</td>
	<td>9</td>
	<td>10</td>
	</tr>
	<tr>
	<td>11</td>
	<td>12</td>
	<td>13</td>
	<td>14</td>
	<td>15</td>
	</tr>
	<tr>
	<td width="20%">16</td>
	<td width="20%">17</td>
	<td width="20%">18</td>
	<td width="20%">19</td>
	<td width="20%">20</td>
	</tr>
	</table>

	
</div>		
</body>
</html>
 		