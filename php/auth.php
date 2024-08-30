<?php
session_start();
include 'config.php';

function registerUser($username, $password) {
    global $mysqli;
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $passwordHash);
    return $stmt->execute();
}

function loginUser($username, $password) {
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($passwordHash);
    $stmt->fetch();
    return password_verify($password, $passwordHash);
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function getUserId() {
    return $_SESSION['user_id'] ?? null;
}
?>
