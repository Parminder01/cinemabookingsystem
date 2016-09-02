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

<title>Screening</title>


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





<!-- This is the code for producing the table, and where users can choose what ticket type they want, 
and type in the quantity of tickets the user wants -->
<table style="margin-bottom:80px; margin-left:0px;" border=0>
<h2>Choose ticket type:</h2>
<tr bgcolor=#cccccc>
<td width=150>Ticket</td>
<td width=15>Quantity</td>
</tr>
<tr>
<td>Adult</td>
<td align="center"><input type="text" name="qty" size="10"
maxlength="3"></td>
</tr>
<tr>
<td>Child</td>
<td align="center"><input type="text" name="qty1" size="10"
maxlength="3"></td>
</tr>
<tr>
<td>Student</td>
<td align="center"><input type="text" name="qty2" size="10"
maxlength="3"></td>
</tr>
</table>
</form>


<?php
/*Code to diplay todays date*/
$eol = "\n";
$output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">' . $eol;
$output .= '<html xmlns="http://www.w3.org/1999/xhtml">' . $eol;
$output .= '<head>' . $eol;
$output .= '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />' . $eol;
$output .= '</head>' . $eol;
$output .= '<body>' . $eol;
$output .= '<p>Today\'s date is ' . gmdate("M d Y") . '</p>' . $eol;
$output .= '</body>' . $eol;
$output .= '</html>' . $eol;
echo $output;
?>

<?php
/* Code that displays the screening information of the movie that the user has selected,
 and allows users to chose the available date and time when the user wants to watch movie */
	echo "<h2>Select the date and time to watch the movie:</h2>";

	if (isset($_GET['movieid'])) 
	{
		
		
		$sql = "SELECT * FROM screenings 
		WHERE movieid=".$_GET['movieid'];
		
		$outcome = mysql_query($sql);
		
	
		
		  echo "<form method='post' action='seat.php'>";
		
			while ($row = mysql_fetch_array($outcome))  {
			$movieid = $_GET['movieid'];
			
			$screeningid = $row['screeningid'];
			$date = $row['date'];
			$start_time = $row['start_time'];
			$price = $row['price'];
			
			/* This code displays the screening information in a table */
			echo "<table style='margin-bottom:80px; margin-left:0px;' border=0>";
			echo "<tr bgcolor=#cccccc>";
			echo "<td width=20></td>";
			echo "<td width=40>Showing Date</td>";
			echo "<td width=20>Showing Time</td>";
			echo "<td width=20>Price £</td>";
			echo "</tr>";
			echo "<td>";
			echo "<input type='checkbox' name='screeningid' value='$screeningid'>";
			echo "</td>";
			echo "<td>";
			echo "<select name ='date'>";
			echo "<option value='" . $row['date'] ."'>" . $row['date'] ."</option>";
			echo "</td>";
	
			echo "</select>";
			
	
	 
			echo "<td>";
			echo "<select name ='start_time'>";
		    echo "<option value='" . $row['start_time'] ."'>" . $row['start_time'] ."</option>";
			echo "</td>";
			 
			echo "</select>";
			 
			 
			echo "<td>";
			echo "<select name ='price'>";
			echo "<option value='" . $row['price'] ."'>" . $row['price'] ."</option>";
			echo "</td>";
			  
			echo "</select>";
			 
			echo "</table>";	
		}
	

		
			
			
		/* This code allows user to be redirected to the log in page if the user is not logged in,
		so user can view and choose seats */
		if (!isset($_SESSION['username']))  
 		{ 
 			echo "You are not logged in please go to the login page to login to choose seat <a href='login.php'>Log in</a>"; 
 			die; 
 		} 
		
		/* Code to display choose seat button */
		else 
		{
			echo "<input type='submit' value='Choose Seat'>";
			echo "</form>";
		}
	
	}
?>

</div>		
</body>
</html>
