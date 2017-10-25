<?php
	$servername = "localhost";
	
	$db_name = "register";  
		$conn = mysqli_connect($servername, 'root', '');
			
			if (!$conn)
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$connect_database = mysqli_select_db($conn,$db_name);
			
				if(!$connect_database)
				{
					die(mysqli_error());
				}
				
	?>