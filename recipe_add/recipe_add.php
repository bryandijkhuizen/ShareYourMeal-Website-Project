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
						<title>ShareYourMeal.nl - Add Recipe</title>
	</head> <!--The <head> tag with <meta> details (charset, viewport, meta-description, script for google analytics, the favicon, the title and the linking to the stylesheets-->
	
		<?php
			session_start();
		?>

		<?php
	
			$servername = "localhost";
			$username = "root";
			$password = "#Project#2018#";
			$dbname = "database";

			$conn = new mysqli($servername, $username, $password, $dbname);


			$recipe_name = $_POST['recipe_name'];
			$categorie = $_POST['recipe_categorie'];
	
			

			$recipe_ingredients = $_POST['recipe_ingredients'];
			$recipe_description = $_POST['recipe_description'];
			$recipe_duration = $_POST['recipe_duration'];

			$user_id = $_SESSION['user_id'];

			$sql = "INSERT INTO recipe_details (recipe_name, categorie, user_id) VALUES ('$recipe_name', '$categorie', '$user_id')";

				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
				} else {
					echo "Can't add recipe, are you logged in?";
					echo "<a href='../login/login_form/login_form.php'>Login!</a>";
				}

			$sql2 = "INSERT INTO recipe_preparation (recipe_id, ingredients, description, time) VALUES ('$last_id', '$recipe_ingredients', '$recipe_description', 	'$recipe_duration')";

				if ($conn->query($sql2) === TRUE) {
					
				} else {
					echo "<div class='content'><h2>Can't add recipe, are you logged in?</h2></div>";
					echo "<a href='../login/login_form/login_form.php'>Login!</a>";
				}

		$conn->close();
		
		session_start();
		$recipe_id = $_SESSION['recipe_id_rating'];
	
// the message
$msg = "New recipe added to ShareYourMeal.nl \n Below this line you will find your account details! \n";

				$msg .= " \n";
				$msg .= "Name: $recipe_name \n";
				$msg .= "Category: $categorie \n";
				$msg .= "Ingredients: $recipe_ingredients \n";
				$msg .= "Recipe Description: $recipe_description \n";
				$msg .= "Recipe Duration: $recipe_duration \n";
				$msg .= "Sent in by user_id: $user_id \n";


// send email
mail("recipes@shareyourmeal.nl","ShareYourMeal Recipe Registration",$msg);

header( "refresh:1;url=../login/login_form/login_form.php" );

	
		header( "refresh:1;url=../recipe_page/recipe_details/details.php?id=$last_id" );

		
		?> 
	
	

</html>