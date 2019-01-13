<?php
		session_start();
			$servername = "localhost";
			$username = "root";
			$password = "#Project#2018#";
			$dbname = "database";

			$user_id = $_GET['user_id'];
		


			$conn = new mysqli($servername, $username, $password, $dbname);

			
		
			$sql = "DELETE FROM adress
					WHERE user_id=$user_id";

					if ($conn->query($sql) === TRUE) {
					} 

				$sql2 = "DELETE FROM user_login
						WHERE user_id=$user_id";

					if ($conn->query($sql2) === TRUE) {

					} 
					
				$sql3 = "DELETE FROM user_details
						WHERE id=$user_id";

					if ($conn->query($sql3) === TRUE) {

					} 

			$conn->close();
			
			
			header( "refresh:1;url=../logout/logout.php" );
		
		?>

<?php
// the message
$msg = "You removed your account from ShareYourMeal \n This was the last notification you'll get! \n";
				$msg .= " \n";

				$msg .= "\n Regards, \n Webmaster!";



// send email
mail("$email","User Message",$msg);

?>