

<?php
		if(isset($_GET['user_id'])){
			require_once('../database_connect/db_connect.php');
				$id = mysqli_real_escape_string($conn, $_GET['user_id']);
				$sql = "SELECT * FROM user_details WHERE id='$id'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
			}

		if(isset($_GET['user_id'])){
			require_once('../database_connect/db_connect.php');
				$id2 = mysqli_real_escape_string($conn, $_GET['user_id']);
				$sql2 = "SELECT * FROM recipe_details WHERE user_id='$id2'";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_array($result2);
			}

		if(isset($_GET['user_id'])){
			require_once('../database_connect/db_connect.php');
				$id3 = mysqli_real_escape_string($conn, $_GET['user_id']);
				$sql3 = "SELECT DATE_FORMAT(registration_date, '%W %D %M %Y') as RegisterDate FROM user_details WHERE id='$id3'";
				$result3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_array($result3);
			}

	?>

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
					<link rel="stylesheet" type="text/css" href="../css/recipe_style.css">	
					<title>ShareYourMeal.nl - <?php session_start(); $_SESSION['user_id']; ?></title>
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
				<center>
					<table>
						<tr>
							<th>
								<h1><?php echo 'User Page' . ' Moderating Page';?></h1>
							</th>
						</tr>
						<tr>
							<td>
								<h3>Name: </h3><?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
								
							</td>
							
						</tr>
						
						<tr>
							<td>
								<h3>Member since: </h3><?php echo $row3['RegisterDate']; ?>
								
							</td>
							
						</tr>
						
						<tr>
							<td>
								<form action="account_delete.php">
								<input type="submit" value="Delete Account">
								</form>
							</td>
							
						</tr>
						
					
					</table>
				</center>
		</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>



