
<?php
include_once 'header.php';
include_once 'database_call.php';
?>

    <h2>Contact Us</h2>
    <form action="contact_us.php" method="post">
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
          <?php
          if (!isset($_SESSION['username'])) {
              echo '<input class="form-control" type="text" id="name" name="name" value="Guest" required>';
          } else {
              echo '<input class="form-control" type="text" id="name" name="name" value="'.$_SESSION['username'].'" required>';
          }
          ?>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>

          <?php
          if (isset($_SESSION['email'])) {
            echo '<input class="form-control" type="email" id="email" name="email" value="'.$_SESSION['email'].'" required>';
          } else {
              echo '<input class="form-control" type="email" id="email" name="email" required>';
          }
          ?>
        </div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $date = new DateTime('now');
    $currenttime = $date->format('Y-m-d H:i:s');

    $contactQuery = "INSERT INTO contact(username, email, description, timestamp) VALUES('$name', '$email', '$message', '$currenttime')";
    mysqli_query($db,$contactQuery);
}
?>

<?php
include_once 'footer.php'
?>
