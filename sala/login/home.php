<?php
    session_start();
    if (!$_SESSION['email']){
        header('Location: ');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>Menu
        <nav>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">contato</a></li>
                <li><a href="#">sobre</a></li>
                <li><a href="#">logout</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>