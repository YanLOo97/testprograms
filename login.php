<?php
session_start();

if(isset($_POST['summit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "password"){
        $_SESSION['logged_in'] = true;
        header("Location: home.php");
    } else {
        $error = "Invalid login credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php if(isset($error)){ echo $error; } ?>
</body>
</html>