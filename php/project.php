<?php
include 'config.php';
include 'auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create_project'])) {
        $projectName = $_POST['project_name'];
        $userId = getUserId();
        $stmt = $mysqli->prepare("INSERT INTO projects (name, owner) VALUES (?, ?)");
        $stmt->bind_param("ss", $projectName, $userId);
        if ($stmt->execute()) {
            echo "Project created!";
        } else {
            echo "Project creation failed.";
        }
    }
}
?>
