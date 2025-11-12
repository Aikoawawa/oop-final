<?php
    include __DIR__.'/functions/loginHandler.php';
    session_start();

    logoutUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>This is the admin dashboard</h1>
    <form action="admin.php" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>