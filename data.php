<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "query"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Sample form data (you can get these from your form submission)
$name= $_POST['name'];
$email= $_POST['email'];
$phone=$_POST['phone'];
$query=$_POST['query'];
// Prepare SQL statement to insert data into a table
$sql = "INSERT INTO user ('name','email','phone','query') VALUES ('$name', '$email','$phone','$query')";

// Close connection
$conn->close();
?>
