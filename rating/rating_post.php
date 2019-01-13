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


		
		<?php
			session_start();
				require ('../database_connect/db_connect.php');
		?>

		<?php
			$rating = $_POST['vote'];
			$comment = $_POST['comment'];
			
			$recipe_id = $_SESSION['recipe_id_rating'];
	
			$user_id = $_SESSION['user_id'];
	
	if(isset($_GET['id'])){
				$sql4 = "SELECT * FROM rating JOIN user_login ON user_login.user_id=rating.user_id WHERE recipe_id='$recipe_id'";
				$result4 = mysqli_query($conn, $sql4);
				$row4 = mysqli_fetch_array($result4);
			}
	
		?>
	<?php
			$query = "SELECT * from rating where user_id ='$user_id' AND recipe_id ='$recipe_id'";
 				if ($result=mysqli_query($conn,$query))
  {
   				if(mysqli_num_rows($result) > 0)
    	{
      			echo "<div class='content'><h1>Can't place vote on this Recipe, You allready voted for this recipe</h1></div>";
    		}
  				else
      				$sql = "INSERT INTO rating (rating, comment, user_id, recipe_id) VALUES ('$rating', '$comment', '$user_id', '$recipe_id')";

				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
				} 

	
		header( "refresh:1;url=../recipe_page/recipe_details/details.php?id=$last_id" );


					header( "refresh:1;url=../recipe_page/recipe_details/details.php?id=$recipe_id" );
 		 }
				else
    				echo "Query Failed.";
		?>
	<?php

			
		$conn->close();
		?> 