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
						<title>ShareYourMeal.nl - Add Recipe</title>
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->


<?php 


	session_start();
	if(!isset($_SESSION['user_id'])){
		header( "refresh:1;url=../login/need_login/message.php" );
	}else {
		
	
?>
<!doctype html>
<html lang="en-us"> 
	
	

	<body>
		<div class= "navbar">
				<ul>
					<li><a href="../../homepage/index.php"><img src="../img/logo.png" width="50" height="50" alt=""/></a></li>
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

			<br>
				<center>
					<div class="title_recipe">
						<h1>Add Recipe</h1>
					</div>
				</center>

		<div class="content">
			<center>
				<table>
					<form method="post" action="recipe_add.php">
						<tr>
							<td>
								<input placeholder= "Recipe Title/Name"  name="recipe_name" id="recipe_name" type="text"  required> 
							</td>
						</tr>
						<tr>

							<td>
								<select name="recipe_categorie" id="recipe_categorie" value="Categorie">
									<option value="Bread">Bread</option>
									<option value="Cake">Cake</option>
									<option value="Chinese">Chinese</option>
									<option value="Dessert">Dessert</option>
									<option value="Drinks">Drinks</option>
									<option value="Dutch">Dutch</option>
									<option value="Fast-Food">Fast-Food</option>
									<option value="Fruit">Fruit</option>
									<option value="Italian">Italian</option>
									<option value="Japanese">Japanese</option>
									<option value="Meat">Meat</option>
									<option value="Salads">Salads</option>
									<option value="Snacks">Snacks</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<textarea placeholder= "Ingredients (Separate by Commas)" name="recipe_ingredients" id="recipe_ingredients" style="width:500px;height:100px;" required></textarea>

							</td>
						</tr>
						<tr>
							<td>
								<textarea placeholder= "Recipe Description/Preparation" name="recipe_description" id="recipe_description" style="width:500px;height:200px;" required></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input placeholder= "Cooking / Preparation Time (in minutes)" name="recipe_duration" id="recipe_duration" type="text" required>
								
								<input type="submit" value="Add Recipe">
							</td>
						</tr>
				</table>
			</center>		
		</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>
	
	<?php } ?>
	