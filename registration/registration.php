<html lang="en-us">
	
	<head>
		<title>ShareYourMeal.nl - Registration Progress</title>
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "#Project#2018#";
		$dbname = "database";

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		$email = $_POST['email'];
		$_username = $_POST['username'];
		$_password = $_POST['password'];

		$street = $_POST['street'];
		$number = $_POST['number'];
		$postal = $_POST['postal'];
		$city = $_POST['city'];

			$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

			$sql = "INSERT INTO user_details (first_name, last_name) VALUES ('$first_name', '$last_name')";

				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
		}

			$sql2 = "INSERT INTO adress (user_id, street, number, postal, city ) VALUES ('$last_id', '$street', '$number', '$postal', '$city')";

				if ($conn->query($sql2) === TRUE) {
				} else {
					echo "Error: " . $sql2 . "<br>" . $conn->error;
		}

			$sql3 = "INSERT INTO user_login (user_id, email, username, password) VALUES ('$last_id', '$email', '$_username', '$_password')";

				if ($conn->query($sql3) === TRUE) {
				} else {
					echo "Error: " . $sql3 . "<br>" . $conn->error;
		}
	

		$conn->close();
	?> 
	
</html>

<?php
// the message
$msg = "A user has registered! \n Below this line you will find your account details! \n";

				$msg .= " \n";
				$msg .= "Theusername is: " . $_username;
				$msg .= "\n Your Password is: " . $_password;
				$msg .= "\n We are you looking forward seeing you at our website!";



// send email
mail("$email","ShareYourMeal Registration",$msg);

header( "refresh:1;url=../login/login_form/login_form.php" );
?>

<?php
// the message
$msg = "New registration for ShareYourMeal.nl \n Below this line you will find your account details! \n";

				$msg .= " \n";
				$msg .= "Name: $first_name $last_name \n";
				$msg .= "Your username is: " . $_username;
				$msg .= "\n The Password is: " . $_password;
				$msg .= "\n The Email Adress is: " . $email;
				$msg .= "\n We are you looking forward seeing you at our website!";



// send email
mail("registration@shareyourmeal.nl","ShareYourMeal Registration",$msg);

header( "refresh:1;url=../login/login_form/login_form.php" );
?>