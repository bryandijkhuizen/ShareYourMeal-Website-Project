<?php

	
		if(isset($_GET['id'])){
			require ('../../database_connect/db_connect.php');
				$id = mysqli_real_escape_string($conn, $_GET['id']);
				$sql = "SELECT * FROM recipe_details JOIN user_login ON recipe_details.user_id=user_login.user_id  WHERE id='$id'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
			}

		if(isset($_GET['id'])){
			require ('../../database_connect/db_connect.php');
				$sql2 = "SELECT * FROM recipe_preparation WHERE recipe_id='$id'";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_array($result2);
			}

		if(isset($_GET['id'])){
				$sql3 = "SELECT DATE_FORMAT(registration_date, '%W %D %M %Y') as RegisterDate FROM recipe_details WHERE id='$id'";
				$result3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_array($result3);
			}

		if(isset($_GET['id'])){
				$sql4 = "SELECT * FROM rating JOIN user_login ON user_login.user_id=rating.user_id WHERE recipe_id='$id'";
				$result4 = mysqli_query($conn, $sql4);
				
			}

		




		session_start();
		$recipe_user_id = $row['user_id'];
		$user_id_session = $_SESSION[['user_id']];

		session_start();
		$_SESSION['recipe_id_rating'] = $id;


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
				<link rel="stylesheet" type="text/css" href="../../css/recipe_style.css">	

					<title>ShareYourMeal.nl - <?php echo $row['recipe_name']; ?></title>
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

		<div class="content">
				<center>
					<table>
						<tr>
							<th>
								<h1><?php echo $row['recipe_name'];?></h1>
							</th>
						</tr>
						<tr>
							<td>
								<h3>Categorie: </h3><?php echo $row['categorie'];?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Ingredients: </h3><?php echo $row2['ingredients']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Meal description: </h3><?php echo $row2['description']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<h3>Cooking Time: </h3><?php echo $row2['time'] . ' Minutes'; ?>
							</td>
						</tr>
						
						<tr>
							<td>
								<h3>Added by: </h3><?php echo "<a href='../../user/userpage.php?user_id={$row['user_id']}'>{$row['username']}" . "</td>" . "</a>" ?>
							</td>
						</tr>
						
						<tr>
							<td>
								<h3>Addition Date: </h3><?php echo $row3['RegisterDate']; ?>
							</td>
						</tr>
					</table>
				</center>
		</div>
		<div class="between">
			<br>
			<hr>
			<br>
		</div>
		<div class="vote" >
				<table>
				<tr>
							<td>
								<h3>Vote</h3>
							</td>
						</tr>
						<tr>
							<td>
								<form method="post" action="../../rating/rating_post.php"> 
								<select name="vote" id="vote" value="vote" >
									<option value="1">1/5</option>
									<option value="2">2/5</option>
									<option value="3">3/5</option>
									<option value="4">4/5</option>
									<option value="5">5/5</option>
								</select>
									<br>
								<textarea border="1px" placeholder= "Comment(Optional)" name="comment" id="comment" style="width:600px;height:95px;"></textarea>
								<input type="submit" value="Send">
								</form>
							</td>
						</tr>
					
					
				</table>

		</div>
		
		<div class="between">
			<br>
			<hr>
			<br>
		</div>
		
		<div class="content">
				<center>
				<table>
					<tr>
						<div class='content'><h1>Rating overview</h1></div>
						<th><h1>Rating</h1></th><th><h1>Comment</h1></th><th><h1>Placed by</h1></th>
					</tr>
				<?php 
					while($row4 = mysqli_fetch_assoc($result4)){
						echo "<tr><td>" . "<h3>" . $row4['rating'] .  "</td><td>" . $row4['comment'] . "</td><td>" . "<a href='../../user/userpage.php?user_id={$row4['user_id']}'>{$row4['username']}" . "</td>" . "</a>" . "</h3><br>" ;	

				}
				?>
				</table>
			</center>
		</div>
		
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>

<?php } ?>

