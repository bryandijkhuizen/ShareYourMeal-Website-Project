
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98646223-2"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());
					gtag('config', 'UA-98646223-2');
			</script>
				<link rel='shortcut icon' type='image/x-icon' href='../../img/favicon.png' />
				<link rel="stylesheet" type="text/css" href="../../css/style.css">	
				<link rel="stylesheet" type="text/css" href="../../css/recipe_style.css"/>
					<title>ShareYourMeal.nl - Login Section</title>
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->
<?php

	if(!empty($_POST)){
		include("../../database_connect/inc_connect_mysql.php");
		
		$email = mysqli_real_escape_string($db, $_POST['email']);
		
		$query = "SELECT * FROM user_login WHERE email='$email';";
		$result = mysqli_query($db, $query) or die("WRONG!: " . mysql_error());
		
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$username = $row['username'];
				$password = $row['password'];
				
			}
			
			$receiver = $email;
			$subject = "ShareYourMeal.nl - Password request";
			$msg = "Hello, you've requested your password and username \n";
			
			$msg .=" Your username is: " . $username;
			$msg .="\n Your password is: " . $password;
			$msg .="\n\n Regards, Webmaster";
			$msg .="\n\n ---- End of auto-generated message ----";
			$extra = "X-MAILER: PHP/version" . phpversion();
			
			
			
			if(!mail($receiver, $subject, $msg, $extra)){
				$text = "Something has gone wrong sending this email";
				
				echo($text);
			}
			
			else {
				echo "<div class='content'>";
				$text = "<h1>Your password has been sent.</h1>";
				echo $text;
				echo "</div>";
				header( "refresh:1;url=../login_form/login_form.php" );
				
			} 
			
		}else {
			echo "<div class='content'>";
				$text = "<h1>Your email is not known in our database</h1>";
				echo $text;
				echo "</div>";
				header( "refresh:1;url=../../registration/registration_form.php" );
		}
	}


?>