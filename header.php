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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=movies">Movies</a>    
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=contact_us">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contact_us_items">Contact Us Messages</a>    
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=movie_upload">Movie_Upload</a>    
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=registration">Registration</a>   
        </li>

        <?php
            if (!isset($_SESSION["email"]) && !isset($_SESSION["username"])) {
                ?>
                <li class="nav-item">
                <a class="nav-link" href="?page=login">Login</a>   
                </li>
               
                <?php
            } else {
                ?>
                <li class="nav-item">
                <a class="nav-link" href="?page=logout">Logout</a>   
                </li>
                <li><a class="nav-link disabled" href="#">
                        <?php
                        echo "Username: " . $_SESSION["username"];
                        ?>
                    </a></li>
                <?php
            }
            ?>
</ul>
</div>
</div>
</nav>
<main>

    <div class="container">