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
                <li><a class="nav-link" href="?page=login">Login</a></li>
                <?php
            } else {
                ?>
                <li><a class="nav-link" href="?page=logout">Logout</a></li>
                <li><a class="nav-link disabled" href="#">
                        <?php
                        echo "Username: " . $_SESSION["username"];
                        ?>
                    </a></li>
                <?php
            }
            ?>
            <li><a href="/">Home</a></li>
            <li><a href="?page=movies">Movies</a></li>
            <li><a href="?page=TV_Shows">TV Shows</a></li>
            <li><a href="?page=contact_us">Contact Us</a></li>
            <li><a href="?page=movie_upload">Movie_Upload</a></li>
            <li><a href="?page=registration">Registration</a></li>
        </ul>
    </nav>
</header>
<main>

    <div class="container">
