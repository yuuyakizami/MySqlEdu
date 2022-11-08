<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// Create database
// $sql = "CREATE DATABASE Test";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }



//Create Table for User Message
// $sql = "CREATE TABLE UserMessage(
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   email VARCHAR(50) NOT NULL,
//   message VARCHAR(500) NOT NULL,
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//   echo "Table UserMessage created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$conn->close();
?>


