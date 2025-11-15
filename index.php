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
    <link rel="icon" href="/assets/logo_noText.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HonLib</title>
</head>
<body>
    <?php include __DIR__.'/includes/heading.php';?>
    <div class="bg-image"></div>
    
    <div class="login-form">
        <form action="index.php" method="POST">
            <div class="login-frame"> 
                <input type="text" name="email" placeholder="Username" required class="text-input"><br>
                <div class="password-input">
                    <input type="password" name="password" placeholder="Password" required class="text-input"><br>
                </div>
                <input type="submit" name="login" value="Login" class="submit-button"><br>
            </div>
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