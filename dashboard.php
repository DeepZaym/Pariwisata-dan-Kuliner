<?php
    session_start();

    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<header>
        <a href="index.html">Home</a>
        <a href="register.php">Register</a>
        <a href="dashboard.php"></a>
    </header>

    <h3>Selamat datang <?= $_SESSION["username"] ?></h3>
    
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>

</body>
</html>