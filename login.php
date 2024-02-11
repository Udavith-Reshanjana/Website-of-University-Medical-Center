<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "authenticate.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        $_SESSION['username'] = $username;
        header("Location: Home.php");
        exit();
    } else {
        // Set error message in session
        $_SESSION['login_error'] = true;
        exit('<script>alert("Invalid username or password");window.location.href = "LogIn.html";</script>');
    }
}
?>
