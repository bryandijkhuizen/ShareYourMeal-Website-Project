

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

			session_start();
			$user_id = $_SESSION['user_id'];
			$user_page_id = $_GET['user_id'];

			if($user_id == $user_page_id){

	?>


<?php
		require ('../database_connect/db_connect.php');
			$sql4 = "SELECT * FROM recipe_details JOIN user_login ON recipe_details.user_id=user_login.user_id WHERE recipe_details.user_id=$id";

			$result4 = mysqli_query($conn, $sql4);


				
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
							<li><center><a href="../user/userpage.php?user_id=<?php session_start(); echo $_SESSION['user_id']; ?>"><?php session_start(); echo $_SESSION['user']; ?></a></li>
							<li><center><a href="../user/userpage.php?user_id=<?php session_start(); echo $_SESSION['user_id']; ?>">public page</a></li></ul>
						</div>
		</div>

		<div class="content">
				<center>
					<table>
						<tr>
							<th>
								<h1><?php echo 'User Page';?></h1>
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
						
						
						
						
						
						<div  class="content">
			
			<center>
				<table style="padding-bottom: 50%;">
					<tr>
						<th ><h1>Recipes of: <?php echo $row['first_name'] . " " . $row['last_name'];?></h1></th>
					</tr>
				<?php 
					while($row4 = mysqli_fetch_assoc($result4)){
						echo "<tr><td>" . "<h3><a href='../recipe_page/recipe_details/details.php?id={$row4['id']}'>{$row4['recipe_name']}" . "</a> </h3></td>
						</tr><br>" ;	

				}
				?>
				</table>
				
				<table>
				<tr>
							<td>
								<a href='account_delete.php?user_id=<?php echo $row['id'] ?>' onClick="return confirm('Are you sure you want to delete this recipe?');"><h2 style='color:red'>Delete Account</h2></a>
								
							</td>
							
						</tr>
				</table>
			</center>
			
		</div>
						

					
					</table>
				</center>
		</div>
	</body> <!--Body containing the navigation bar and the content of the website-->
	
</html>

<?php }else if(!isset($_SESSION['user_id'])){
		header( "refresh:1;url=userpage.php?user_id=$id" );
	}
			else  {
				header( "refresh:1;url=userpage.php?user_id=$id" );
				
			}
?>





