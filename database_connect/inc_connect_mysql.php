	
	<?php
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "#Project#2018#";
		$dbname = "database";
			$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

				if(mysqli_connect_errno()){
					die("Connection failed" . mysqli_connect_errno() . "(" . mysqli_connect_errno() . ")");
			}
	?>