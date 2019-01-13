<?php
$servername = "localhost";
$username = "root";
$password = "#Project#2018#";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$recipe_name = $_REQUEST['recipe_name_edit'];
$ingredients = $_REQUEST['recipe_ingredients_edit'];
$recipe_id = $_SESSION['recipe_id_edit'];


$sql = "UPDATE recipe_details SET recipe_name='$recipe_name' WHERE id=$recipe_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>