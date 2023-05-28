<?php

include_once 'header.php';

  // If the user is not logged in, redirect to the login page
  if (!isset($_SESSION["email"]) && !isset($_SESSION["username"])) {
    header("Location: ?page=login");
    exit;
  }


?>

<form action="upload.php" method="post" enctype="multipart/form-data">

    <label for="username">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="release_date">Release date:</label><br>
    <input type="text" id="release_date" name="release_date"><br>
    <label for="genre">Genre:</label><br>
    <input type="text" id="genre" name="genre">
    <br>
    <label for="rating">Rating:</label><br>
    <input type="text" id="rating" name="rating"><br>
    <label for="fileToUpload">Image:</label><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
include_once 'footer.php'
?>