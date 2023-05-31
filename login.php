<?php
include_once 'header.php';
include_once 'database_call.php';
?>
<form action="login.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>
<!--    <input type="submit" value="Submit" name="submit">-->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include_once 'footer.php'
?>

<?php
//session_start();

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
            header('location: /');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>