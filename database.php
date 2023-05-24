<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "CREATE TABLE IF NOT EXISTS users (
//        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//        username VARCHAR(30) NOT NULL,
//        email VARCHAR(50) NOT NULL,
//        password VARCHAR(255) NOT NULL
//        )";
//
$sql = "CREATE TABLE movies (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    release_year YEAR NOT NULL,
    genre VARCHAR(255),
    rating FLOAT(2,1),
    image_url VARCHAR(255) NOT NULL
)";

//$sql = "CREATE TABLE contact (
//    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    username VARCHAR(255) NOT NULL,
//    email VARCHAR(50) NOT NULL,
//    description VARCHAR(1000) NOT NULL,
//    timestamp DATETIME NOT NULL
//)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

