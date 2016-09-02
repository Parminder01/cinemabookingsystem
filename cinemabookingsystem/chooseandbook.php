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

<title>Book Now</title>


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



<h2>Movies</h2>

<h3>Please select the available movie, that you wish to watch</h3>


<?php 

			echo "<br/>";
 			$sql = "SELECT movieid, title, genre
			FROM movies;"; 
 			$outcome = mysql_query($sql); 
			
 			
			/* This is the code to retrive the information from the movie database, and for the user to select the movie */ 
			while ($row = mysql_fetch_array($outcome))  
 			{ 
				
	
				echo "<br/>";
				echo "<br/>";
				echo "<br/>";
				echo "<img src='".$row['title'].".jpg' style='height:300px; width:450px'/>";
				echo "<a href='screening.php"."?movieid=".$row['movieid']."'>";
				echo "<br/>".$row['title'];
				echo"<br/>";
				echo"(Click here to select movie)";
				echo "</a>";
				echo "Movie ID: ".$row['movieid'];
				echo "<br/>Movie title: ".$row['title']; 
				echo "<br/>Genre: ".$row['genre']; 
 				echo "<br/>";
				echo "<br/>";
				echo "<br/>";
				echo "<br/>";
				echo "<br/>";
					
 			} 
 			 
			 
			 
 		?> 


</div>		
</body>
</html>








