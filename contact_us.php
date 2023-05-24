
<?php
include_once 'header.php';
include_once 'database_call.php';
?>

      <h2>Contact Us</h2>
      <form action="contact_us.php" method="post">

          <label for="name">Name:</label>
          <?php
          if (!isset($_SESSION['username'])) {
              echo '<input type="text" id="name" name="name" value="Guest" required>';
          } else {
              echo '<input type="text" id="name" name="name" value="'.$_SESSION['username'].'" required>';
          }
          ?>

        <label for="email">Email:</label>

          <?php
          if (isset($_SESSION['email'])) {
            echo '<input type="email" id="email" name="email" value="'.$_SESSION['email'].'" required>';
          } else {
              echo '<input type="email" id="email" name="email" required>';
          }
          ?>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Submit</button>
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
