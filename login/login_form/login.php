<html lang="en-us">
	
	<head>
		<title>ShareYourMeal.nl - Login Processing</title>
			<link rel='shortcut icon' type='image/x-icon' href='../../img/favicon.png' />
				<link rel="stylesheet" type="text/css" href="../../css/style.css">	
				<link rel="stylesheet" type="text/css" href="../../css/recipe_style.css"/>
		
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->

	<body>
		<div class="content">
			<?php
				session_start();
					include ('../../database_connect/inc_connect_mysql.php');

						if(!empty($_POST)){
	
							$user_login = mysqli_real_escape_string($db, $_POST['username']);
	
							$password_login = mysqli_real_escape_string($db, $_POST['password']);
	
							$query = "SELECT * FROM user_login WHERE username='$user_login' AND password='$password_login'";
	
						}

							$result = mysqli_query($db, $query) or die("ERROR: " . mysqli_error());

						if(mysqli_num_rows($result) > 0){
	
							$_SESSION['auth']=true;
							$_SESSION['timeout']=time() + 120;
							$_SESSION['user']=$user_login;
	
								while($row = mysqli_fetch_assoc($result)){
									$role = $row['role'];
									$_SESSION['user_id']=  $row['user_id'];
									$_SESSION['user_role'] = $row['role'];
		
						}	
	
									if($role == 'user'){
										header( "refresh:1;url=../../user/userpage.php?user_id=" . $_SESSION['user_id']);
											}else if($role == 'admin'){
												header( "refresh:1;url=../../user/userpage.php?user_id=" . $_SESSION['user_id']);
									}
						}

												else {
													
													$text = "No valid combination of e-mail & password.<br> Choose: <br> <a href=login_form.php> Try again</a><br><a href=../../registration/registration_form.php>Register Here!</a><br>";
			die($text);
		}

			?>
		</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>