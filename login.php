<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post" action="login.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      <input type="submit" id= "submit" name="submit" value="Login">
    </form>
  </body>
</html>
<?php
include_once 'database_call.php';
session_start();

  if (isset($_POST['submit'])) {

        $errors = [];

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
      
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT id, email, username FROM users WHERE username = '$username' AND password = '$password'";
            $results = mysqli_query($db, $query);
            $rows = mysqli_num_rows($results);
            if ($rows == 1) {
                $data = mysqli_fetch_assoc($results);
              $_SESSION['username'] = $data['username'];
              $_SESSION['email'] = $data['email'];
              $_SESSION['id'] = $data['id'];
              $_SESSION['success'] = "You are now logged in";
              header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }
?>

