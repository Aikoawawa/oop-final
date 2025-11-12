<?php
    include __DIR__.'/functions/loginHandler.php';
    session_start();

    logoutUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/assets/style.css" rel="stylesheet">
    <link rel="icon" href="/assets/logo_noText.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HonLib Dashboard</title>
    
</head>
<body>
    <?php include __DIR__.'/includes/heading.php';?>
    <h1>Home page</h1>
    <form action="home.php" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
        <?php
            include 'functions/dbHandler.php';
                    
            $books = getBooks();
            foreach ($books as $book) {
                $title = $book['Title'];
                $author = $book['Author'];
                echo "<tr>";
                echo "<th> $title </th>";
                echo "<th> $author </th>";
                echo "</th>";
            }
        ?>
    </table>
</body>
</html>