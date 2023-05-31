<?php
include_once 'header.php';
  // If the user is not logged in, redirect to the login page
  if (!isset($_SESSION["email"]) && !isset($_SESSION["username"])) {
    header("Location: ?page=login");
    exit;
  }
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
</div>
<div class="mb-3">
    <label for="release_date" class="form-label">Release Date</label>
    <input type="text" class="form-control" id="release_date" name="release_date">
</div>
<div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre">
</div>
<div class="mb-3">
    <label for="rating" class="form-label">Rating</label>
    <input type="text" class="form-control" id="rating" name="rating">
</div>
<div class="mb-3">
    <label for="fileToUpload" class="form-label">Image</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
</div>
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
include_once 'footer.php'
?>