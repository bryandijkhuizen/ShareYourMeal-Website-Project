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
					<link rel='shortcut icon' type='image/x-icon' href='../../img/favicon.png' />
		<link rel="stylesheet" type="text/css" href="../../css/style.css">	
					<title>ShareYourMeal.nl - Login Section</title>
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->
	
	<body>
		<div class= "navbar">
				<ul>
					<li><a href="../../homepage/index.php"><img src="../../img/logo.png" width="50" height="50" alt=""/></a></li>
					<li><a href="../../homepage/index.php">Home</a></li>
					<li><a href="../../registration/registration_form.php">Register</a></li>
					<li><a href="../../login/login_form/login_form.php">Login</a></li>
					<li><a href="../../recipe_add/recipe_add_form.php">Add Recipe</a></li>
					<li><a href="../../recipe_page/recipe_search/search_form.php">Search</a></li>
					<li><a href="../../recipe_page/recipe_list/recipe_show.php">Recipe List!</a></li>
					<li><a href="../../logout/logout.php">Logout</a></li>
						<div class="user_box">
							<li><center><a href="../../user/userpage.php?user_id=<?php session_start(); echo $_SESSION['user_id']; ?>"><?php session_start(); echo $_SESSION['user']; ?></a></li></ul>
						</div>
		</div>

		<center>
			<div class="title_login">
				<h1>Password forgotten</h1>
			</div>
		</center>
		
		<div class="content">
				<center>
					<table>
						<form method="post" action="pw_forgot.php">
							<tr>
								<td>
									<input placeholder= "Please enter your email adress" name="email" id="email" type="text" size="45" maxlength="45"  required> 
									<input type="submit" value="Send password">
								</td>
							</tr>
						</form>
					</table>
				</center>
			</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>
