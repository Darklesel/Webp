<?php
include_once 'database_call.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	if (empty($username)) {
		echo "Username is required";
		exit;
	}

	if (empty($email)) {
		echo "Email is required";
		exit;
	}

	if (empty($password)) {
		echo "Password is required";
		exit;
	}
	$password = md5($password);
	$Tableinput = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
	mysqli_query($db,$Tableinput);
	header('location: /');
}
?>