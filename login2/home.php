<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
    echo "Bem vindo, ".$_SESSION['login'];
    ?>
    <menu>
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="sobre.php">sobre</a></li>
            <li><a href="logoff.php">logout</a></li>
        </ul>
    </menu>
</body>
</html>