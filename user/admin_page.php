
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
					<title>ShareYourMeal.nl - Administrator Section</title>
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

			<div class="content">
				<?php
					session_start();
						if(isset($_SESSION['user'])){
							echo("<h2> Welcome " . $_SESSION['user'] . "</h2>");
							echo ("You just entered Admin section");
							echo ("This link can be used to <a href='../logout/logout.php'> Logout</a><br>");
					}
						else {	

							echo ("You're not logged in yet;<br> You can <a href='../registration/registration.php'> Register here!</a><br>");
							echo ("You're not logged in yet;<br> You can <a href='../login/login_form/login_form.php'> Try to login again</a>");	

						}

				?>
			</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>