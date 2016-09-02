

<?php
	session_start();
	
	
	if (isset($_SESSION['username'])) 
				{
					/* This code displays the welcome text, and logut bar when user is logged in */
				echo "Welcome, ".$_SESSION['username']."<br><li><a href='logout.php'>Logout</a></li>";
					
				}
				
				/* This code displays the login and register bar at the top of the page, when the user is not logged in */
				else
				{
					echo "<li><a href='login.php'>Login</a></li>";
					echo "<li><a href='register.php'>Register</a></li>";
				}
	
	?>
	
	

		