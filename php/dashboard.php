<?php
include 'config.php';
include 'auth.php';

if (!isLoggedIn()) {
    header('Location: login.html');
    exit();
}

$userId = getUserId();
$projects = $mysqli->prepare("SELECT name FROM projects WHERE owner = ?");
$projects->bind_param("s", $userId);
$projects->execute();
$result = $projects->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($userId); ?></h1>
    <h2>Your Projects</h2>
    <ul>
        <?php while ($project = $result->fetch_assoc()) { ?>
            <li><?php echo htmlspecialchars($project['name']); ?></li>
        <?php } ?>
    </ul>
    <a href="create_project.html">Create New Project</a>
    <a href="logout.php">Logout</a>
</body>
</html>
