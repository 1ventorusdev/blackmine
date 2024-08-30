<?php
// Firebase configuration
define('FIREBASE_API_KEY', 'AIzaSyDcHeOlnBTgTahXdh7bqZN4O3bWBlxoDpQ');
define('FIREBASE_AUTH_DOMAIN', 'redmine-13f46.firebaseapp.com');
define('FIREBASE_PROJECT_ID', 'redmine-13f46');
define('FIREBASE_STORAGE_BUCKET', 'redmine-13f46.appspot.com');
define('FIREBASE_MESSAGING_SENDER_ID', '447829552875');
define('FIREBASE_APP_ID', '1:447829552875:web:94923357e6f69f2e2d18ae');

// Database connection (you might use MySQL or another database here)
$mysqli = new mysqli("localhost", "user", "password", "database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
