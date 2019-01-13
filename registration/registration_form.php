<!doctype html>
<html lang="en-us"> 
	
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
				<link rel='shortcut icon' type='image/x-icon' href='../img/favicon.png' />
				<link rel="stylesheet" type="text/css" href="../css/style.css">	
					<title>ShareYourMeal.nl - Registration</title>

	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->
	
	<body>
		<div class= "navbar">
				<ul>
					<li><a href="../homepage/index.php"><img src="../img/logo.png" width="50" height="50" alt=""/></a></li>
					<li><a href="../homepage/index.php">Home</a></li>
					<li><a href="../registration/registration_form.php">Register</a></li>
					<li><a href="../login/login_form/login_form.php">Login</a></li>
					<li><a href="../recipe_add/recipe_add_form.php">Add Recipe</a></li>
					<li><a href="../recipe_page/recipe_search/search_form.php">Search</a></li>
					<li><a href="../recipe_page/recipe_list/recipe_show.php">Recipe List!</a></li>
					<li><a href="../logout/logout.php">Logout</a></li>
						<div class="user_box">
							<li><center><a href="../user/userpage.php?user_id=<?php session_start(); echo $_SESSION['user_id']; ?>"><?php session_start(); echo $_SESSION['user']; ?></a></li></ul>
						</div>
		</div>

			<center>
				<div class="title_reg">
						<h1>Registration Form</h1>
				</div>
			</center>

			 <div class="content">
				<center>
					<table width="968" height="669">
						<form method="post" action="registration.php">
							<tr>
									<td>
										<input placeholder= "First Name" name="first_name" type="text" required> 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Last Name" name="last_name" type="text" required> 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Email Adress" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="use example@example.com" required> 
										
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Username" name="username" type="text" required> 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Password" name="password" type="password" required> 
									</td>
							</tr>
											<p>
							<tr>
									<td>
										<input placeholder= "Street (Optional)" name="street" type="text"  title="Only Letters"> 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Number (Optional)" name="number" type="text" pattern="[0-9]" title="Only Numbers"> 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "Postal Code(Optional)" name="postal" type="text" pattern="[A-Za-z0-9]" > 
									</td>
							</tr>
							<tr>
									<td>
										<input placeholder= "City" name="city" type="text" required> 
										<input type="submit" value="Register">
									</td>
							</tr>

						</form>
				</table>
			</center>
		  </div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>
