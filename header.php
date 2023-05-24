<?php
include_once 'auth.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Movie Database</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>My Movie Database</h1>
    <nav>
        <ul>
            <?php
            if (!isset($_SESSION["email"]) && !isset($_SESSION["username"])) {
                ?>
                <li><a class="nav-link" href="login.php">Login</a></li>
                <?php
            } else {
                ?>
                <li><a class="nav-link" href="logout.php">Logout</a></li>
                <li><a class="nav-link disabled" href="#">
                        <?php
                        echo "Username: " . $_SESSION["username"];
                        ?>
                    </a></li>
                <?php
            }
            ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="TV_Shows.html">TV Shows</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="movie_upload.php">Movie_Upload</a></li>
            <li><a href="registration.html">Registration</a></li>
        </ul>
    </nav>
</header>
<main>

    <div class="container">
