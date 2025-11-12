<?php
    function loginUser($username, $password) {
        $usersDB = json_decode(file_get_contents(__DIR__.'/../db/users.json'), true);
        foreach ($usersDB as $user) {
            if($user['username'] === $username && $user['password'] === $password ) {
                $_SESSION['user'] = $user;
                return true;
            }
        }
        return false;

    }

    function logoutUser() {
        if (isset($_POST['logout'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
    }
?>