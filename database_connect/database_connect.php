	
	<?php
		function database_connect() {
			$servername = "localhost";
			$username = "root";
			$password = "#Project#2018#";

			$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

			}

			function database_disconnect() {

			$conn->close();

		}

	?>

