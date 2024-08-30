<?php
include 'config.php';
include 'auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (registerUser($username, $password)) {
            header('Location: login.html');
        } else {
            echo "Registration failed.";
        }
    } elseif (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (loginUser($username, $password)) {
            $_SESSION['user_id'] = $username;
            header('Location: dashboard.php');
        } else {
            echo "Login failed.";
        }
    }
}
?>
