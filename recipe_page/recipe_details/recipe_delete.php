<?php 
$recipe_id = $_GET['id'];
		if(isset($_GET['id'])){
				$sql5 = "SELECT user_id FROM recipe_details WHERE id='$recipe_id'";
				$result5 = mysqli_query($conn, $sql5);
				$row5 = mysqli_fetch_array($result5);
			
				
			}


		session_start();
		$recipe_user_id = $row['user_id'];
		$user_id_session = $_SESSION[['user_id']];
		

		
		session_start();
		$_SESSION['recipe_id_rating'] = $id;

		$user_id = $_SESSION['user_id'];

			if($user_id == $row5['user_id']){

?>


<?php
		session_start();
			$servername = "localhost";
			$username = "root";
			$password = "#Project#2018#";
			$dbname = "database";

			$recipe_id = $_GET['id'];

			$conn = new mysqli($servername, $username, $password, $dbname);

			$sql3 = "DELETE FROM rating
					WHERE recipe_id=$recipe_id";

					if ($conn->query($sql3) === TRUE) {
						$last_id = $conn->insert_id;
					} 	
		
			$sql = "DELETE FROM recipe_preparation
					WHERE recipe_id=$recipe_id";

					if ($conn->query($sql) === TRUE) {
						$last_id = $conn->insert_id;
					} 

			

				$sql2 = "DELETE FROM recipe_details
						WHERE id=$recipe_id";

					if ($conn->query($sql2) === TRUE) {

					} else {
						
					}

				

			$conn->close();

			header( "refresh:1;url=../recipe_list/recipe_show.php" );
		
		?>

<?php }else if(!isset($_SESSION['user_id'])){
		header( "refresh:1;url=details.php?id=$recipe_id" );
	}
			else  {
				header( "refresh:1;url=details.php?id=$recipe_id" );
				
			}
?>
