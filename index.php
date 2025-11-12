<?php
    session_start();
    include __DIR__.'/functions/loginHandler.php';

    if (isset($_POST["login"])) {
        $username = $_POST['email'];
        $password = $_POST['password'];

        if (loginUser($username, $password)) {
            if ($_SESSION['user']['role'] === 'admin') {
                header("Location: adminPage.php");
            } else {
                header("Location: homePage.php");
            }
            exit();
        } else {
            $error = "<p>Invalid username or password<x`/p>";
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/assets/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login page</h1>
    
    <div class="login-form">
        <form action="index.php" method="POST">
            Email<br> 
            <input type="text" name="email" placeholder="Email" required class="text-input"><br>
            Password<br>
            <input type="text" name="password" placeholder="password" required class="text-input"><br>
            <input type="submit" name="login" value="login" class="submit-button"><br>
        </form>
    </div>  

<!--
    Error handling    
-->
    <?php
        if (isset($error)) echo $error;
    ?>
</body>
</html>