	
	<?php
		require ('../../database_connect/db_connect.php');
			$sql = "SELECT * FROM recipe_details JOIN user_login ON recipe_details.user_id=user_login.user_id";


			$result = mysqli_query($conn, $sql);


				?>



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
				<link rel="stylesheet" type="text/css" href="../../css/recipe_style.css"/>
					<title>ShareYourMeal.nl - Recipe List</title>
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
							<li><center><a href="../../user/userpage.php?user_id=<?php session_start(); echo $_SESSION['user_id']; ?>"><?php session_start(); echo $_SESSION['user']; ?></a></li>
								
								<li><center><a href="recipe_show_admin.php?id=<?php echo $row['id']; ?>">admin panel</a></li>
							
							</ul>
						</div>
		</div>

		<div  class="content" >
			
			<center >
				<table style="padding-bottom: 20%;"> 
					<tr style="padding-bottom: 20%;">
						<th ><h1>Recipe Name</h1></th><th><h1>Added by</h1></th>
					</tr>
				<?php 
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr><td>" . "<h3><a href='../recipe_details/details.php?id={$row['id']}'>{$row['recipe_name']}" . "</a> </h3></td>
						<td><h3><a href='../../user/userpage.php?user_id={$row['user_id']}'>{$row['username']}" . "</a> </h3></td></tr><br>" ;	



				}
				?>
				</table>
			</center>
			
		</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>
